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
        .shaded {
            @apply shadow-[inset_0_-2px_8px_rgba(0,0,0,0.5)];
        }
        .bordered {
            @apply border border-white;
        }
        h1, h2, p {
            @apply p-5 [text-shadow:1px_1px_2px_rgba(0,0,0,0.8)];
        }
        h1 {
            @apply text-4xl lg:text-5xl underline;
        }
        h2 {
            @apply text-4xl;
        }
        p {
            @apply text-xl;
        }
        a {
            @apply text-cyan-400 [text-shadow:1px_1px_2px_rgba(0,0,0,0.4)] underline;
        }
    </style>