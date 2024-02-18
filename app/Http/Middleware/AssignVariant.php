<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Test;

class AssignVariant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $assignedVariant = session('assigned_variant', 'none');
        
        if ($assignedVariant === 'none') {
            $activeTest = Test::where('is_active', true)->first();
            if ($activeTest) {
                $totalRatio = $activeTest->variants->sum('targeting_ratio');
                $randomPoint = mt_rand(1, $totalRatio);
                $currentPoint = 0;
                foreach ($activeTest->variants as $variant) {
                    $currentPoint += $variant->targeting_ratio;
                    if ($randomPoint <= $currentPoint) {
                        session(['assigned_variant' => $variant->name]);
                        break;
                    }
                }
            } else {
                session(['assigned_variant' => 'none']);
            }
        }

        return $next($request);
    }
}
