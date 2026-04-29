<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web01 Reloaded</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>

    <header>
        <div class="container">
	    <div>
		<h1>Rákattantam a gyakorlásra</h1>
		<p>A munka kitölti a rendelkezésére fennálló időt.</p>
	    </div>
            <nav>
		<ul>
                    <li>
                        <a href="<?= base_url() ?>">
                            <i class="fa-solid fa-house-chimney"></i> Kezdőlap
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('services') ?>">
                            <i class="fa-solid fa-folder-open"></i> Szolgáltatások
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('contact') ?>">
			    <i class="fa-solid fa-rectangle-list"></i> Kapcsolat
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>