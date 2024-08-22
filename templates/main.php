
<body class="h-screen grid place-content-center content-center bg-slate-900 text-white font-[Poppins]">
    <main>
        
        <section class="flex justify-center text-center">
            <img
                src="<?= $poster_url; ?>" width="200" alt="Poster of <?= $title; ?>"
                style="border-radius: 16px"
            />
        </section>
        
        <hgroup>
            <h2"><?= $title ?> - <?= $until_message ?> </h2>
            <p>Release date: <?= $release_date ?> </p>
            <p>The next is: <?= $following_production ?> </p>
        </hgroup>

    </main>
</body>
