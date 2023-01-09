<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
<div class="w-full max-w-xs mx-auto py-12 px-6">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="text-center mb-8">
            <img src="https://your-company-logo.com/logo.png" alt="Company Logo" class="h-12 w-auto mx-auto mb-4">
            <h1 class="text-2xl font-bold text-gray-800">{{ $mailData['name'] }}</h1>
            <p class="text-gray-600">{{ $mailData['email'] }}</p>
        </div>
        <p class="mb-6 text-gray-700">{{ $mailData['message'] }}</p>
    </div>
</div>
</body>
</html>
