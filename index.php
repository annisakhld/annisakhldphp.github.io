<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Web - Annisa</title>

    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <img src="foto.jpg" alt="Foto Annisa" class="foto">

        <h1>
            <?php
            echo "Annisa Khoolidatul Ihsanah";
            ?>
        </h1>

        <p class="identitas">
            <?php
            echo "102022500065 / Fakultas Rekayasa Industri / S1 Sistem Informasi";
            ?>
        </p>

        <div class="social-media">

            <a href="https://github.com/annisakhld" target="_blank">
                GitHub
            </a>

            <a href="https://www.instagram.com/annisakhld/" target="_blank">
                Instagram
            </a>

            <a href="https://www.linkedin.com/in/annisa-khoolidatul-ihsanah-81503a292/" target="_blank">
                LinkedIn
            </a>

        </div>

        <section>

            <h2>Biodata</h2>

            <table>

                <tr>
                    <th>Nama</th>
                    <td>
                        <?php
                        echo "Annisa Khoolidatul Ihsanah";
                        ?>
                    </td>
                </tr>

                <tr>
                    <th>NIM</th>
                    <td>
                        <?php
                        echo "102022500065";
                        ?>
                    </td>
                </tr>

                <tr>
                    <th>Fakultas</th>
                    <td>
                        <?php
                        echo "Fakultas Rekayasa Industri";
                        ?>
                    </td>
                </tr>

                <tr>
                    <th>Program Studi</th>
                    <td>
                        <?php
                        echo "S1 Sistem Informasi";
                        ?>
                    </td>
                </tr>

            </table>

        </section>

        <section>

            <h2>Date & Time</h2>

            <p>
                <?php
                echo "Website dibuat pada 30 September 2026";
                ?>
            </p>

        </section>

    </div>

</body>

</html>