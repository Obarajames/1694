<!doctype html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CIP 1694 is a Cardano Improvement Proposal to reason about An On-Chain Decentralized Governance Mechanism for Cardano Voltaire era." />
    <title> CIP 1694 - An On-Chain Decentralized Governance Mechanism for Voltaire</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>


<body class="p-0 m-0 box-border h-full bg-zinc-50 dark:bg-black">
    <div class=" flex justify-center insert-0  sm:px-8">
        <div class="flex w-full max-w-7xl lg:px-8">
            <div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20">
                {{--render our views--}}
                @yield("content")

                
            </div>
             
        </div>
       
    </div>
    <script src="{{ mix('js/custom.js') }}"></script>

</body>

</html>