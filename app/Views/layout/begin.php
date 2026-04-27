<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web01 Reloaded</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ckeditor5/ckeditor5.css">
</head>
<body>

    <header>
        <div class="row">
            <div>Web01 Reloaded Header</div>
            <nav>
            <?php if (true): ?>
		<ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url() ?>" class="nav-link">
                            <i class="fa-solid fa-house-chimney"></i> Kezdőlap
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('services') ?>" class="nav-link">
                            <i class="fa-solid fa-folder-open"></i> Szolgáltatások
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('contact') ?>" class="nav-link">
                        <i class="fa-solid fa-rectangle-list"></i> Kapcsolat
                        </a>
                    </li>
                </ul>
	    <?php endif; ?>
            </nav>
        </div>
    </header>
    
    <main>