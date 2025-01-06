<script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        body {
            @apply bg-black;
        }
        .page {
            @apply text-orange-50 h-screen w-screen overflow-y-auto;
            @apply bg-[url(https://img.goodfon.com/original/1920x1080/c/82/kosmos-art-pikseli-8bit-planeta-zvezdy-retro-grafika.jpg)];
        }
        .panel {
            @apply rounded-xl min-h-40 col-span-1 overflow-y-auto;
        }
        .panel-noscroll {
            @apply rounded-xl min-h-40 col-span-1;
        }
        .shaded {
            @apply shadow-[inset_0_-2px_8px_rgba(0,0,0,0.5)];
        }
        .bordered {
            @apply border border-white;
        }
        section {
            @apply p-5;
        }
        h1, h2, h3, p {
            @apply p-2 [text-shadow:1px_1px_2px_rgba(0,0,0,0.8)];
        }
        h1 {
            @apply p-3 text-4xl lg:text-4xl 2xl:text-5xl underline;
        }
        h2 {
            @apply text-3xl 2xl:text-4xl;
        }
        h3 {
            @apply text-2xl 2xl:text-3xl;
        }
        p {
            @apply text-xl 2xl:text-2xl;
        }
        a {
            @apply text-cyan-200 [text-shadow:1px_1px_2px_rgba(0,0,0,0.4)] underline;
        }
    </style>