<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn {
            border: 4px solid #C7DFFF;
            background: #1565CE;
            padding: 10px 45px;
            font-size: 18px;
            font-family: "montserrat";
            font-weight: bold;
            cursor: pointer;
            margin: 10px;
            transition: 0.8s;
            position: relative;
            overflow: hidden;
            border-radius: 40px;
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-content {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .btn span {
            position: relative;
            z-index: 1;
            transition: 0.8s;
        }

        .btn::before {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 0%;
            background: #fb923c;
            z-index: 0;
            transition: 0.8s;
            bottom: 0;
            border-radius: 50% 50% 0 0;
        }

        .btn::after {
            content: "Start free trial →";
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            z-index: 1;
            transition: 0.8s;
            transform: translateY(100%);
            opacity: 0;
        }

        .btn:hover::before {
            height: 180%;
        }

        .btn:hover span {
            transform: translateY(-100%);
            opacity: 0;
        }

        .btn:hover::after {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
</head>

<body>
    <x-layout>
        <button class="btn">
            <div class="btn-content">
                <span>Start free trial</span>
            </div>
        </button>

    </x-layout>
</body>

</html>