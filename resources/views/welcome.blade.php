<!DOCTYPE html>
<html>
<head>
    <title>Text Generation Interface</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Text Generation Interface</h1>
        </header>
        <main>
            <form action="/generate" method="POST">
                @csrf
                <div class="form-group">
                    <label for="prompt">Enter your prompt:</label>
                    <input type="text" id="prompt" name="prompt" required>
                </div>
                <button type="submit">Generate</button>
            </form>
            @if(isset($generatedText))
                <div class="result">
                    <h2>Generated Text:</h2>
                    <p>{{ $generatedText }}</p>
                </div>
            @endif
        </main>
    </div>
</body>
</html>
