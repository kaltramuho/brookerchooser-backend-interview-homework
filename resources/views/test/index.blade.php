<!DOCTYPE html>
<html>
<head>
    <title>A/B Test Demo</title>
</head>
<body>
    <h1>A/B Test Variant: {{ $variant }}</h1>
    @if ($variant === 'Variant A')
        <p>This is the content for Variant A.</p>
    @elseif ($variant === 'Variant B')
        <p>This is the content for Variant B.</p>
    @else
        <p>No variant assigned.</p>
    @endif
</body>
</html>
