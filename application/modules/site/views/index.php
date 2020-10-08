<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="p-8">
        <div x-data="{ show: true }">
            <h1 class="font-bold text-6xl" x-show="show">Hello World</h1>

            <button class="mt-2 px-4 py-2 text-white bg-blue-600 shadow-lg rounded-lg" @click="show = !show">
                <template x-if="show">
                    <span>hidden</span>
                </template>
                <template x-if="!show">
                    <span>show</span>
                </template>
            </button>
        </div>
    </div>
</body>

</html>