
<body class="h-screen grid place-content-center content-center bg-slate-900 text-white font-[Poppins]">
    <main>
        
        <section class="flex justify-center py-4 hover:scale-110 duration-200 transition ease-in-out">
            <img
                src="<?= $poster_url; ?>" width="200" alt="Poster of <?= $title; ?>"
                style="border-radius: 16px"
            />
        </section>
        
        <hgroup class="text-center">
            <h1 class="font-bold text-4xl mb-4"> <?= $title ?> </h1>
            <h2 class="font-light text-slate-400"> The premiere is <span class="px-1 bg-yellow-400 text-slate-800 rounded"><?= $until_message ?></span> </h2>
            <p class="paragraph pb-2">Release date: <?= $release_date ?> </p>
            <p class="paragraph hover:text-white hover:underline hover:cursor-default hover:scale-105 transition duration-500 ease-in-out ">The next is: <?= $following_production ?> </p>
        </hgroup>

    </main>
</body>
