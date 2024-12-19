<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Fullscreen Overlay */
.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    color: #fff;
    font-family: Arial, sans-serif;
}

/* Spinner Animation */
.spinner {
    border: 6px solid rgba(255, 255, 255, 0.3);
    border-top: 6px solid #ffffff;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

/* Loading Text */
.loading-text {
    margin-top: 15px;
    font-size: 18px;
    text-align: center;
    animation: fade 1.5s ease-in-out infinite;
}

@keyframes fade {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}

    </style>
</head>

<body>
    @if (auth()->user()->status== 'Aktif')
    <script>
        window.location.href = "{{ url('dasboarduser') }}";
    </script>
    @else
    <div class="loading-overlay">
        <div class="spinner"></div>
        <p class="loading-text">Tunggu Sebentar...</p>
    </div>
    @endif
</body>

</html>