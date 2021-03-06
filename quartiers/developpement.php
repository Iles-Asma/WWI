<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Développement</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../main.js"></script>
    <?php $db = new PDO ('mysql:host=localhost;dbname=wwi', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));?>
</head>

<body class="dev">
    <!-- BOUTON RETOUR -->
    <a class="retour" href="../index.html"><h1> &xlarr; Retour </h1></a>

    <!-- POP UP -->
    <?php 

    $stmt = $db -> prepare('SELECT * FROM metiers WHERE id_quartiers = 4');
    $stmt -> execute();

    while ($data = $stmt -> fetch()) {

        $skill = $data['competences'];
        $skill_ex = explode(",", $skill);

        $qualities = $data['qualites'];
        $qualities_ex = explode(",", $qualities);

        echo('
    <div class="popup" id="popup-'.$data['id'].'">
            <div class="background"></div>
            <div class="info">
                <button class="close">&times;</button>
                <h3>'.$data['nom'].'</h3>
                <div class="text">'.$data['description_metier'].'
                </div>

                <table>
                    <tr class="categorie">
                        <th>Qualités</th>
                        <th>Compétences</th>
                    </tr>
                    <tr>
                        <td><ul>
                            <li>'.$qualities_ex[0].'<br>
                            <li>'.$qualities_ex[1].'<br>
                            <li>'.$qualities_ex[2].'<br>
                            <li>'.$qualities_ex[3].'<br>
                        </ul></td>
                        <td><ul>
                            <li>'.$skill_ex[0].'<br>
                            <li>'.$skill_ex[1].'<br>
                            <li>'.$skill_ex[2].'<br>
                        </ul></td>
                    </tr>
                </table>
                
                <div class="formation contenu">
                <p class="titre">Formations:</p>
                    <div class="bac contenu">
                        <p>Bac +2</p>
                        <p>Bac +2</p>
                        <p>Bac +3</p>
                    </div>
                    <div class="point contenu">
                        <span class="circle"></span>
                        <span class="circle"></span>
                        <span class="circle"></span>
                        
                    </div>
                    <div class="vertical"></div>
                    <div class="diplome contenu">
                        <p>'.$data['bac_2'].'</p>
                        <p>'.$data['bac_3'].'</p>
                        <p>'.$data['bac_5'].'</p>
                    </div>

                    <p class="salaire">Salaire:'.$data['salaire'].'</p>
                    
                </div>

            </div>
        </div>
        ');
    }
        ?>

    <section>
    

        

        <!-- RESEAU DECO -->
        <svg class="traits" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1217.62 265.6">
            <defs>
                <style>
                    .a60128d6-ada3-444a-a1f2-94accb3e1c1c,
                    .aee30f9b-caf2-4c81-b420-7535f2ca7f29,
                    .afd38fc3-e72e-4c03-a18f-c2efee440e03,
                    .b20f0d8a-1356-4ea7-91fc-468541c853d9,
                    .b5ab886e-1896-4900-bae7-c065dc4896ff,
                    .ea7e4f0e-a8fa-40d4-b42e-b9d9e0c08f6e,
                    .f505e667-ea21-42e9-9c76-4d0de8a7684e,
                    .fb324d2a-77f7-4518-8d47-57d5a70b91eb {
                        fill: none;
                        stroke: #fff;
                        stroke-miterlimit: 10;
                        stroke-width: 2px;
                    }

                    .b20f0d8a-1356-4ea7-91fc-468541c853d9 {
                        stroke-dasharray: 12.3 12.3;
                    }

                    .a60128d6-ada3-444a-a1f2-94accb3e1c1c,
                    .b5ab886e-1896-4900-bae7-c065dc4896ff,
                    .ea7e4f0e-a8fa-40d4-b42e-b9d9e0c08f6e,
                    .f505e667-ea21-42e9-9c76-4d0de8a7684e {
                        stroke-linecap: square;
                    }

                    .ea7e4f0e-a8fa-40d4-b42e-b9d9e0c08f6e {
                        stroke-dasharray: 12.2 12.2;
                    }

                    .b5ab886e-1896-4900-bae7-c065dc4896ff {
                        stroke-dasharray: 12.38 12.38;
                    }

                    .a60128d6-ada3-444a-a1f2-94accb3e1c1c {
                        stroke-dasharray: 12.89 12.89;
                    }

                    .aee30f9b-caf2-4c81-b420-7535f2ca7f29 {
                        stroke-dasharray: 12.34 12.34;
                    }

                    .afd38fc3-e72e-4c03-a18f-c2efee440e03 {
                        stroke-dasharray: 11.13 11.13;
                    }
                </style>
            </defs>
            <title>pointilles</title>
            <g id="a629018a-3f55-4eeb-843d-30291d955984" data-name="Calque 2">
                <g id="f3d01d8a-f45f-4eb9-93a0-7920ff41e210" data-name="Calque 5">
                    <path class="fb324d2a-77f7-4518-8d47-57d5a70b91eb" d="M357.24,255.78l4.35-4.14" />
                    <path class="b20f0d8a-1356-4ea7-91fc-468541c853d9" d="M370.49,243.16,615.41,9.78" />
                    <path class="fb324d2a-77f7-4518-8d47-57d5a70b91eb" d="M619.87,5.54l4.34-4.14" />
                    <path class="f505e667-ea21-42e9-9c76-4d0de8a7684e" d="M624.21,1.4,629,5" />
                    <path class="ea7e4f0e-a8fa-40d4-b42e-b9d9e0c08f6e" d="M638.72,12.39,925.53,229.6" />
                    <path class="f505e667-ea21-42e9-9c76-4d0de8a7684e" d="M930.4,233.28l4.78,3.62,4.1-4.38" />
                    <path class="b5ab886e-1896-4900-bae7-c065dc4896ff" d="M947.75,223.49,1112.87,47.3" />
                    <path class="f505e667-ea21-42e9-9c76-4d0de8a7684e" d="M1117.11,42.78l4.1-4.38,3.71,4.72" />
                    <path class="a60128d6-ada3-444a-a1f2-94accb3e1c1c" d="M1132.88,53.26l75.64,96.35" />
                    <path class="f505e667-ea21-42e9-9c76-4d0de8a7684e" d="M1212.51,154.68l3.7,4.72" />
                    <line class="fb324d2a-77f7-4518-8d47-57d5a70b91eb" x1="0.71" y1="1.9" x2="4.93" y2="6.17" />
                    <line class="aee30f9b-caf2-4c81-b420-7535f2ca7f29" x1="13.6" y1="14.94" x2="252.16" y2="256.25" />
                    <line class="fb324d2a-77f7-4518-8d47-57d5a70b91eb" x1="256.49" y1="260.63" x2="260.71" y2="264.9" />
                    <line class="fb324d2a-77f7-4518-8d47-57d5a70b91eb" x1="624.21" y1="137.4" x2="624.21" y2="131.4" />
                    <line class="afd38fc3-e72e-4c03-a18f-c2efee440e03" x1="624.21" y1="120.27" x2="624.21" y2="14.52" />
                    <line class="fb324d2a-77f7-4518-8d47-57d5a70b91eb" x1="624.21" y1="8.95" x2="624.21" y2="2.95" />
                </g>
            </g>
        </svg>

        <div class="page">

            <!-- POSITION ICONE DECO -->
            <svg class="position" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.03 77.69">
                <defs>
                    <style>
                        .a60865b6-d624-41c7-bc11-f008cf05b40d {
                            fill: #ffd985;
                        }

                        .ac3166bb-ae58-415a-8a3b-59965374e055 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <title>position</title>
                <g id="ae6406cb-047c-42d9-9147-61dadf319091" data-name="Calque 2">
                    <g id="a3363c07-2aab-47b9-aa5a-00ce73d664c7" data-name="Calque 5">
                        <path class="a60865b6-d624-41c7-bc11-f008cf05b40d"
                            d="M50.05,37.84a22.24,22.24,0,0,0,3-11.39A26.76,26.76,0,0,0,45.83,8C38.41.31,28.75,0,26.46,0,24,0,14.3.32,7,8A26.48,26.48,0,0,0,0,26.65a22.37,22.37,0,0,0,2.92,11L25.11,76.93a1.49,1.49,0,0,0,2.6,0Z" />
                        <circle class="ac3166bb-ae58-415a-8a3b-59965374e055" cx="26.4" cy="27.42" r="9.71" />
                    </g>
                </g>
            </svg>

            <!-- WIFI DECO -->
            <svg class="wifi" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69 53.05">
                <defs>
                    <style>
                        .ac523c8f-0e66-4c30-997d-d6346c024616 {
                            fill: none;
                            stroke: #fff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 2px;
                        }

                        .a86ee5aa-cf3d-4c14-aaeb-7f825505a015 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <title>wifi</title>
                <g id="ff5a4c68-6c58-41a1-a424-b352386bc867" data-name="Calque 2">
                    <g id="b3c02225-9ff8-48a1-aecb-0c06750668af" data-name="Calque 5">
                        <path id="w4" class="ac523c8f-0e66-4c30-997d-d6346c024616"
                            d="M1,15.05c4.3-3.94,15.66-13.25,31.94-14,18-.84,30.82,9.3,35.06,13" />
                        <path id="w3" class="ac523c8f-0e66-4c30-997d-d6346c024616"
                            d="M9.1,27.53c3.47-3.06,12.21-9.9,24.62-10.48,13.61-.64,23.41,6.62,26.88,9.49" />
                        <path id="w2" class="ac523c8f-0e66-4c30-997d-d6346c024616"
                            d="M19.46,40.32c1.53-1.64,6.92-7,15-7.27s13.59,4.73,15.19,6.28" />
                        <ellipse id="w1" class="a86ee5aa-cf3d-4c14-aaeb-7f825505a015" cx="34.5" cy="49.3" rx="3.9" ry="3.75" />
                    </g>
                </g>
            </svg>

            <!-- ARBRES -->
            <svg class="arbre1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 139.56 352">
                <defs>
                    <style>
                        .f5205cfc-eab1-42f1-a722-836e2cfa5a5a {
                            fill: #8beabf;
                        }

                        .ea684bb7-22e2-4d68-9bb0-d05136e574ea {
                            fill: none;
                            stroke: #fff;
                            stroke-linecap: round;
                            stroke-miterlimit: 10;
                            stroke-width: 3px;
                        }
                    </style>
                </defs>
                <title>arbre2</title>
                <g id="a415055e-2025-45ad-bdde-abfad3982062" data-name="Calque 2">
                    <g id="be134889-4f1e-4dbd-a2c1-a7ca251de672" data-name="Calque 6">
                        <path class="f5205cfc-eab1-42f1-a722-836e2cfa5a5a"
                            d="M67.15,0c-26.29,0-47.45,24.78-53,46C7,73.15,28.9,82,25.15,114.45S-2.09,151.6.15,175.73c2.37,25.61,32.29,57.78,72,56.77,35.59-.9,63.29-28,67-52.27,4.07-26.59-23.3-33.16-27-71.19-3.17-32.51,15.53-41.19,7-66.68C112.66,23,92.49,0,67.15,0Z" />
                        <line class="ea684bb7-22e2-4d68-9bb0-d05136e574ea" x1="70.15" y1="54.5" x2="70.15" y2="350.5" />
                        <polyline class="ea684bb7-22e2-4d68-9bb0-d05136e574ea"
                            points="50.15 53.5 72.65 96.59 87.15 84.5" />
                        <line class="ea684bb7-22e2-4d68-9bb0-d05136e574ea" x1="69.65" y1="177" x2="90.15" y2="148.5" />
                    </g>
                </g>
            </svg>
            <svg class="arbre2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.56 432.04">
                <defs>
                    <style>
                        .beed3a58-1b46-4246-a6d8-1d974069d316 {
                            fill: #8beabf;
                        }

                        .ab2b7e6d-23ea-4393-8fa7-28b8aaa776fd,
                        .bc0b6da9-fa55-4552-bdab-c0c5dace6f03 {
                            fill: none;
                            stroke: #fff;
                            stroke-miterlimit: 10;
                        }

                        .bc0b6da9-fa55-4552-bdab-c0c5dace6f03 {
                            stroke-linecap: round;
                            stroke-width: 3px;
                        }

                        .ab2b7e6d-23ea-4393-8fa7-28b8aaa776fd {
                            stroke-width: 2px;
                        }
                    </style>
                </defs>
                <title>arbre</title>
                <g id="b2e98b93-2211-4fec-9de7-9a1b101c1911" data-name="Calque 2">
                    <g id="a7a41f3c-61c8-4809-963a-91bcf0f1ebce" data-name="Calque 6">
                        <path class="beed3a58-1b46-4246-a6d8-1d974069d316"
                            d="M86.56,2C71.06,1.13,58,22.57,39.06,53.62c-13.39,22-23.91,39.29-31,64.13-13.31,46.69-14,123.84,28,159.21,4.76,4,26.7,21.5,56,18.8,21.16-1.95,35.71-13.38,41-17.69,39.32-32,43.93-96.07,33.5-140-2-8.48-14.17-31.95-38.5-78.9C103.9,12.51,96.67,2.64,86.56,2Z" />
                        <line class="bc0b6da9-fa55-4552-bdab-c0c5dace6f03" x1="88.06" y1="90.54" x2="89.06"
                            y2="430.54" />
                        <path class="bc0b6da9-fa55-4552-bdab-c0c5dace6f03" d="M55.06,182.54l34.49,29.6,29-20.1" />
                        <polyline class="bc0b6da9-fa55-4552-bdab-c0c5dace6f03"
                            points="106.06 126.54 88.06 162.22 61.06 116.54" />
                    </g>
                    <g id="a6f6a759-6191-4898-8ed8-17292eeefa53" data-name="Calque 5">
                        <path class="ab2b7e6d-23ea-4393-8fa7-28b8aaa776fd"
                            d="M106.06.54c7.91,12.24,19,30.19,31.34,53.07,29.31,54.34,44,82.27,45.95,119.93.77,15.09.14,43.16-13.93,78.55" />
                    </g>
                </g>
            </svg>

            <!-- PANNEAU -->
            <svg class="panneau objet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.19 376.13">
                <defs>
                    <style>
                        .a73ff0ea-155e-4a84-92e1-053c5391e149,
                        .e24c59ac-ccd1-47df-b12f-b34804c03831,
                        .e8d9e03f-032d-443c-b262-e882542a51a7 {
                            fill: none;
                            stroke: #fff;
                            stroke-miterlimit: 10;
                        }

                        .e24c59ac-ccd1-47df-b12f-b34804c03831 {
                            stroke-width: 5px;
                        }

                        .a73ff0ea-155e-4a84-92e1-053c5391e149 {
                            stroke-width: 10px;
                        }

                        .fa7e56e7-24a5-4bd5-b433-40796452da16 {
                            fill: #5765b2;
                        }

                        .bd31812c-bc7e-4dcd-a24b-39c8ff7b2854 {
                            fill: #fff;
                        }

                        .e8d9e03f-032d-443c-b262-e882542a51a7 {
                            stroke-linecap: round;
                            stroke-width: 2px;
                        }
                    </style>
                </defs>
                <title>panneau</title>
                <g id="af605b51-3f8e-4b22-bf85-ce931d97c078" data-name="Calque 2">
                    <g id="b446c5dc-ca14-4857-82c0-d9c8816882ed" data-name="Calque 5">
                        <rect class="e24c59ac-ccd1-47df-b12f-b34804c03831" x="11.48" y="84.13" width="126.05"
                            height="249" rx="39.76" />
                        <line class="a73ff0ea-155e-4a84-92e1-053c5391e149" x1="72.5" y1="336.13" x2="72.5"
                            y2="376.13" />
                        <rect class="fa7e56e7-24a5-4bd5-b433-40796452da16" x="21.92" y="96.74" width="104.39"
                            height="224.56" rx="28.43" />
                        <path class="bd31812c-bc7e-4dcd-a24b-39c8ff7b2854"
                            d="M54.63,201.62H73V180.53H83.81v53.12H73V210.71H54.63v22.94H43.85V180.53H54.63Z" />
                        <path class="bd31812c-bc7e-4dcd-a24b-39c8ff7b2854"
                            d="M93.83,180.53h10.62v9.54H93.83Zm.38,14.63h9.86v38.49H94.21Z" />
                        <path class="e8d9e03f-032d-443c-b262-e882542a51a7"
                            d="M1,59.63q.5-23,1-46l35,27,38-39,25,42,43-13q-2.5,19-5,38" />
                        <line class="e8d9e03f-032d-443c-b262-e882542a51a7" x1="88.5" y1="127.13" x2="106.5"
                            y2="127.13" />
                        <line class="e8d9e03f-032d-443c-b262-e882542a51a7" x1="97.5" y1="136.13" x2="97.5"
                            y2="118.13" />
                        <line class="e8d9e03f-032d-443c-b262-e882542a51a7" x1="43.5" y1="293.13" x2="57.5"
                            y2="293.13" />
                        <line class="e8d9e03f-032d-443c-b262-e882542a51a7" x1="50.5" y1="300.13" x2="50.5"
                            y2="286.13" />
                    </g>
                </g>
            </svg>

            <!-- ROBOT -->
            <svg class="robot objet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 116.39 196.67">
                <defs>
                    <style>
                        .b977d09c-94af-4c1e-ab06-08e34c4fe32b,
                        .e81a7fd6-1825-4f68-8560-17d7f11b040b {
                            fill: none;
                            stroke-miterlimit: 10;
                            stroke-width: 4px;
                        }

                        .e81a7fd6-1825-4f68-8560-17d7f11b040b {
                            stroke: #ffe161;
                        }

                        .ba7ddc8b-0085-41bd-98c0-74711e1d6080 {
                            fill: #5765b2;
                        }

                        .b977d09c-94af-4c1e-ab06-08e34c4fe32b {
                            stroke: #5765b2;
                        }

                        .baed683b-ee25-4a2d-867b-364f3fab2247 {
                            fill: #ffe161;
                        }
                    </style>
                </defs>
                <title>robot</title>
                <g id="efabd42d-1ed8-42fb-9aca-edacd2e2d7eb" data-name="Calque 2">
                    <g id="b2f37917-00dc-4324-81a8-eb09fd84b034" data-name="Calque 5">
                        <line class="e81a7fd6-1825-4f68-8560-17d7f11b040b" x1="44.29" y1="31" x2="44.29" y2="49.56" />
                        <path class="ba7ddc8b-0085-41bd-98c0-74711e1d6080"
                            d="M52.91,42.6h-17A12.49,12.49,0,0,1,23.41,30.11V21.3A21.1,21.1,0,0,1,44.29,0h0A21.1,21.1,0,0,1,65.17,21.3v8.81A12.4,12.4,0,0,1,52.91,42.6Z" />
                        <path id="robotArm" class="e81a7fd6-1825-4f68-8560-17d7f11b040b"
                            d="M67.9,57.86c3,4.81,6.87,11.47,11,19.76,7.57,15.28,9,22.16,11.89,22.27,3.28.12,7.8-8.38,13.71-42" />
                        <path class="e81a7fd6-1825-4f68-8560-17d7f11b040b"
                            d="M21.86,61.89A48.33,48.33,0,0,0,11.64,79.32c-3.54,11-1.4,19-.77,34.9A213.17,213.17,0,0,1,9.94,144" />
                        <line class="e81a7fd6-1825-4f68-8560-17d7f11b040b" x1="30.37" y1="121.47" x2="30.37"
                            y2="195.7" />
                        <line class="e81a7fd6-1825-4f68-8560-17d7f11b040b" x1="60.53" y1="121.47" x2="60.53"
                            y2="195.7" />
                        <path class="ba7ddc8b-0085-41bd-98c0-74711e1d6080"
                            d="M56.17,126.11H34.73a18.29,18.29,0,0,1-18.28-18.28v-40A18.28,18.28,0,0,1,34.73,49.56H56.17A18.27,18.27,0,0,1,74.44,67.84v40A18.28,18.28,0,0,1,56.17,126.11Z" />
                        <path class="ba7ddc8b-0085-41bd-98c0-74711e1d6080"
                            d="M55.89,186.42h8.73a32.18,32.18,0,0,0,8,2.4c5.66.92,8.66-.16,10.8,1.83,1,.89,1.91,2.57,1.74,6l-29.26-1.16v-9.09Z" />
                        <path class="ba7ddc8b-0085-41bd-98c0-74711e1d6080"
                            d="M35,186.42H26.28a32.28,32.28,0,0,1-8,2.4c-5.65.92-8.66-.16-10.8,1.83-1,.89-1.91,2.57-1.73,6L35,195.51v-9.09Z" />
                        <circle cx="36.68" cy="21.34" r="2.93" />
                        <circle cx="55.08" cy="21.34" r="2.93" />
                        <path id="robotHand" class="b977d09c-94af-4c1e-ab06-08e34c4fe32b"
                            d="M100,40.69c-1.34,7.45,2.11,14.15,6,14.73s8.49-5.08,8.35-12.82" />
                        <path class="b977d09c-94af-4c1e-ab06-08e34c4fe32b"
                            d="M16.43,155.26c1.18-7.48-2.41-14.08-6.34-14.54S1.71,146,2,153.74" />
                        <circle class="baed683b-ee25-4a2d-867b-364f3fab2247" cx="28.01" cy="58.38" r="2.93" />
                        <circle class="baed683b-ee25-4a2d-867b-364f3fab2247" cx="36.68" cy="58.38" r="2.93" />
                    </g>
                </g>
            </svg>

            <!-- DRONE -->
            <svg class="drone objet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 119.22 91.77">
                <defs>
                    <style>
                        .a51c3618-a125-4c77-bd84-3b8cde84839f {
                            fill: #3f3f3f;
                        }

                        .a78d630b-4ebe-4d99-8e80-be3fec4774c4,
                        .be4d2506-2dfd-4d04-af6c-0ca19c76db20 {
                            fill: none;
                            stroke-linecap: round;
                            stroke-width: 2px;
                        }

                        .a78d630b-4ebe-4d99-8e80-be3fec4774c4 {
                            stroke: #3f3f3f;
                            stroke-miterlimit: 10;
                        }

                        .be4d2506-2dfd-4d04-af6c-0ca19c76db20 {
                            stroke: #fff;
                            stroke-linejoin: round;
                        }
                    </style>
                </defs>
                <title>drone</title>
                <g id="a1490c51-1ab8-4d95-b25c-911076368e70" data-name="Calque 2">
                    <g id="b8874c14-8592-42b5-84f9-fed91f52a804" data-name="Calque 5">
                        <rect class="a51c3618-a125-4c77-bd84-3b8cde84839f" x="31.58" y="38.49" width="54.36"
                            height="8.49" />
                        <path class="a51c3618-a125-4c77-bd84-3b8cde84839f"
                            d="M79.5,70.77H39.28a8.11,8.11,0,0,1-7.46-5.12L24.09,47H95L86.92,65.75A8.1,8.1,0,0,1,79.5,70.77Z" />
                        <polyline class="a78d630b-4ebe-4d99-8e80-be3fec4774c4" points="88.61 60 94.11 71 94.11 90.77" />
                        <polyline class="a78d630b-4ebe-4d99-8e80-be3fec4774c4"
                            points="30.56 60.11 25.11 70.81 25.11 90.77" />
                        <polyline class="a78d630b-4ebe-4d99-8e80-be3fec4774c4"
                            points="8.38 63.98 8.38 46.14 108.88 46.14 108.88 63.98" />
                        <line class="a78d630b-4ebe-4d99-8e80-be3fec4774c4" x1="1" y1="42.35" x2="17.99" y2="42.35" />
                        <line class="a78d630b-4ebe-4d99-8e80-be3fec4774c4" x1="101.24" y1="42.35" x2="118.22"
                            y2="42.35" />
                        <path class="a51c3618-a125-4c77-bd84-3b8cde84839f" d="M6.27,39.72a3.26,3.26,0,1,1,6.51,0" />
                        <path class="a51c3618-a125-4c77-bd84-3b8cde84839f" d="M106.34,39.64a3.26,3.26,0,0,1,6.51,0" />
                        <line class="be4d2506-2dfd-4d04-af6c-0ca19c76db20" x1="53.22" y1="1" x2="59.22" y2="24" />
                        <line class="be4d2506-2dfd-4d04-af6c-0ca19c76db20" x1="80.22" y1="1" x2="73.22" y2="24" />
                        <line class="be4d2506-2dfd-4d04-af6c-0ca19c76db20" x1="103.22" y1="7" x2="88.22" y2="29" />
                    </g>
                </g>
            </svg>


            <!-- BATIMENTS + NOMS -->
            <div class="batiments">

                <!-- WEB MASTER -->
                <div class="webmaster building">
                    <h3>Web master</h3>

                    <svg class="open" id="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353.54 580">
                        <defs>
                            <style>
                                .f25f575c-6a63-4d69-8f65-66beac36922c {
                                    fill: #a5a5a5;
                                }

                                .a9d17a72-65f7-4eac-a14a-61b922da5eba {
                                    fill: #3a3a3a;
                                }

                                .a9d17a72-65f7-4eac-a14a-61b922da5eba,
                                .f1f2076d-bcb0-4248-99d7-03b511ddaa71 {
                                    stroke: #fff;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px;
                                }

                                .a756b407-65bc-4c20-bc05-a965f168d198 {
                                    fill: #8beabf;
                                }

                                .f1f2076d-bcb0-4248-99d7-03b511ddaa71 {
                                    fill: none;
                                }
                            </style>
                        </defs>
                        <title>batiment_1</title>
                        <g id="acff630c-f994-479d-8d18-9fd626f96cad" data-name="Calque 2">
                            <g id="a808ce80-ded4-4e28-a7a5-75233737173d" data-name="Calque 10">
                                <rect class="f25f575c-6a63-4d69-8f65-66beac36922c" x="108.95" y="13.82" width="232.48"
                                    height="564.9" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="149.34" y1="21.66" x2="149.34"
                                    y2="574.27" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="198.27" y1="20.47" x2="198.27"
                                    y2="573.08" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="247.81" y1="20.47" x2="247.81"
                                    y2="573.08" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="297.34" y1="20.47" x2="297.34"
                                    y2="573.08" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="115.68" y1="75.45" x2="331.32"
                                    y2="75.45" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="115.68" y1="136.05" x2="331.32"
                                    y2="136.05" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="115.68" y1="203.18" x2="331.32"
                                    y2="203.18" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="115.68" y1="266.59" x2="331.32"
                                    y2="266.59" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="115.68" y1="326.26" x2="331.32"
                                    y2="326.26" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="115.68" y1="385.93" x2="331.32"
                                    y2="385.93" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="115.68" y1="445.6" x2="331.32"
                                    y2="445.6" />
                                <line class="a9d17a72-65f7-4eac-a14a-61b922da5eba" x1="115.68" y1="505.27" x2="331.32"
                                    y2="505.27" />
                            </g>
                            <g id="b7090c04-a4f1-41da-a3cf-d7df87ac7ebf" data-name="Calque 6">
                                <path class="a756b407-65bc-4c20-bc05-a965f168d198"
                                    d="M107,66.5c-22.86,6.41-51.58,18.81-65,45-13.91,27.15.43,46.06-3,90C34.52,259.39,7,260.44,1,313.5s13.51,123.05,57,137c18.39,5.9,36.77.37,49-5Z" />
                                <path class="a756b407-65bc-4c20-bc05-a965f168d198"
                                    d="M78.12,580c-10.89-11.21-11-27.21-1.39-37.12,7.5-7.74,20.06-10.85,32.06-8,6.47-8.75,18.67-12.77,30-9.9s19.14,11.89,19.51,22.27c13.24-.05,23.69,7.65,25.1,16.71,1.33,8.59-6,15.19-7,16.08Z" />
                            </g>
                            <g id="fd549cf4-c12a-4f61-be9a-9ce1f61aa13a" data-name="Calque 5">
                                <polyline class="f1f2076d-bcb0-4248-99d7-03b511ddaa71"
                                    points="282 1 352.54 1 352.54 358.99" />
                            </g>
                        </g>
                    </svg>
                </div>

                <!-- INTEGRATEUR WEB -->
                <div class="integrateur building">
                    <h3>Intégrateur web</h3>
                    <svg class="open" id="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 705">
                        <defs>
                            <style>
                                .b67e5488-ac6d-4bee-bedb-ef30aff02bd5 {
                                    fill: #ffd985;
                                }

                                .ac06f34f-a37b-4caa-a342-2ac8409af4a5 {
                                    fill: #5765b2;
                                }

                                .ac06f34f-a37b-4caa-a342-2ac8409af4a5,
                                .baa80669-7a36-4ce7-a811-4d88cbf431ea {
                                    stroke: #fff;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px;
                                }

                                .baa80669-7a36-4ce7-a811-4d88cbf431ea {
                                    fill: none;
                                }
                            </style>
                        </defs>
                        <title>batiment_2</title>
                        <g id="f926b1de-2223-492a-b450-90b4de7a7285" data-name="Calque 2">
                            <g id="b79fb49a-5926-4a27-affa-2983de6e8c79" data-name="Calque 3">
                                <rect class="b67e5488-ac6d-4bee-bedb-ef30aff02bd5" x="57" y="20" width="207"
                                    height="685" />
                                <rect class="b67e5488-ac6d-4bee-bedb-ef30aff02bd5" width="105" height="704.34" />
                                <rect class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x="26.12" y="70.39" width="217.08"
                                    height="29.78" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="79.5" y1="70.39" x2="79.5"
                                    y2="100.16" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="134.66" y1="70.39" x2="134.66"
                                    y2="99.1" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="192.82" y1="70.39" x2="192.35"
                                    y2="99.1" />
                                <rect class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x="26" y="140.64" width="217.08"
                                    height="29.78" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="79.39" y1="140.64" x2="79.39"
                                    y2="170.42" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="134.54" y1="140.64" x2="134.54"
                                    y2="169.36" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="192.7" y1="140.64" x2="192.24"
                                    y2="169.36" />
                                <rect class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x="26" y="210.94" width="217.08"
                                    height="29.78" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="79.39" y1="210.94" x2="79.39"
                                    y2="240.72" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="134.54" y1="210.94" x2="134.54"
                                    y2="239.66" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="192.7" y1="210.94" x2="192.24"
                                    y2="239.66" />
                                <rect class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x="26" y="281.13" width="217.08"
                                    height="29.78" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="79.39" y1="281.13" x2="79.39"
                                    y2="310.91" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="134.54" y1="281.13" x2="134.54"
                                    y2="309.84" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="192.7" y1="281.13" x2="192.24"
                                    y2="309.84" />
                                <rect class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x="26" y="351.32" width="217.08"
                                    height="29.78" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="79.39" y1="351.32" x2="79.39"
                                    y2="381.09" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="134.54" y1="351.32" x2="134.54"
                                    y2="380.03" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="192.7" y1="351.32" x2="192.24"
                                    y2="380.03" />
                                <rect class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x="26" y="421.5" width="217.08"
                                    height="29.78" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="79.39" y1="421.5" x2="79.39"
                                    y2="451.28" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="134.54" y1="421.5" x2="134.54"
                                    y2="450.22" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="192.7" y1="421.5" x2="192.24"
                                    y2="450.22" />
                                <rect class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x="26.12" y="492.57" width="217.08"
                                    height="29.78" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="79.39" y1="491.69" x2="79.39"
                                    y2="521.47" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="134.54" y1="491.69" x2="134.54"
                                    y2="520.4" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="192.7" y1="491.69" x2="192.24"
                                    y2="520.4" />
                                <rect class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x="26" y="564.22" width="217.08"
                                    height="29.78" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="79.39" y1="564.22" x2="79.39"
                                    y2="594" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="134.54" y1="564.22" x2="134.54"
                                    y2="592.94" />
                                <line class="ac06f34f-a37b-4caa-a342-2ac8409af4a5" x1="192.7" y1="564.22" x2="192.24"
                                    y2="592.94" />
                                <line class="baa80669-7a36-4ce7-a811-4d88cbf431ea" x1="9" y1="10" x2="92" y2="10" />
                            </g>
                        </g>
                    </svg>

                </div>

                <!-- DEVELOPPEUR WEB -->
                <div class="devweb building">
                    <h3>Développeur web</h3>
                    <svg class="open" id="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283 598.41">
                        <defs>
                            <style>
                                .b2448351-d86f-4b08-b4ff-357fed2d076c {
                                    fill: #fff;
                                }

                                .b54b35a1-50ba-4e8e-9aac-8adebb89aa07 {
                                    fill: none;
                                    stroke: #ffd985;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px;
                                }

                                .a709f76c-1659-4771-9f16-961a78d03a63 {
                                    fill: #8beabf;
                                }
                            </style>
                        </defs>
                        <title>batiment_3</title>
                        <g id="b35d4beb-9568-4f7d-80e9-5dedebfdc9e2" data-name="Calque 2">
                            <g id="f831ea79-23f4-4efd-a769-ebb29006f196" data-name="Calque 9">
                                <rect class="b2448351-d86f-4b08-b4ff-357fed2d076c" width="246" height="598.41" />
                                <line class="b54b35a1-50ba-4e8e-9aac-8adebb89aa07" x1="35.41" y1="44.48" x2="35.41"
                                    y2="525.63" />
                                <line class="b54b35a1-50ba-4e8e-9aac-8adebb89aa07" x1="68.66" y1="44.48" x2="68.66"
                                    y2="525.63" />
                                <line class="b54b35a1-50ba-4e8e-9aac-8adebb89aa07" x1="105.34" y1="44.48" x2="105.34"
                                    y2="525.63" />
                                <line class="b54b35a1-50ba-4e8e-9aac-8adebb89aa07" x1="139.74" y1="44.48" x2="139.74"
                                    y2="525.63" />
                                <line class="b54b35a1-50ba-4e8e-9aac-8adebb89aa07" x1="175.07" y1="44.48" x2="175.07"
                                    y2="525.63" />
                                <line class="b54b35a1-50ba-4e8e-9aac-8adebb89aa07" x1="208.73" y1="44.48" x2="208.73"
                                    y2="525.63" />
                            </g>
                            <g id="aca80f60-622d-4749-a376-3e4840960f27" data-name="Calque 6">
                                <path class="a709f76c-1659-4771-9f16-961a78d03a63"
                                    d="M273.15,598c12.78-13.16,12.91-31.93,1.64-43.55-8.81-9.08-23.55-12.73-37.62-9.44-7.59-10.26-21.91-15-35.17-11.61s-22.47,14-22.9,26.13c-15.54-.06-27.8,9-29.45,19.6-1.56,10.08,7,17.83,8.18,18.87Z" />
                            </g>
                        </g>
                    </svg>
                </div>

                <div class="reseau building">
                    <h3>Gestionnaire de réseaux</h3>
                    <svg class="open" id="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 247.77 667.81">
                        <defs>
                            <style>
                                .bb331a3e-3ed8-41bd-9ac0-61bb6b8296d0 {
                                    fill: #5765b2;
                                }

                                .b63c9d45-055f-43a1-be74-67616c01946c {
                                    fill: #ffd985;
                                }

                                .ad36d7c5-059e-445e-aea3-654590a926ea {
                                    fill: none;
                                    stroke: #ffd985;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px;
                                }
                            </style>
                        </defs>
                        <title>batiment_4</title>
                        <g id="b36fe2bf-eb06-47da-b923-8d394cce9253" data-name="Calque 2">
                            <g id="a06a21ee-26a5-4d5f-9bde-3301d187ad6e" data-name="Calque 4">
                                <rect class="bb331a3e-3ed8-41bd-9ac0-61bb6b8296d0" y="28.69" width="247.77"
                                    height="639.12" />
                                <rect class="bb331a3e-3ed8-41bd-9ac0-61bb6b8296d0" x="20.25" width="207.27"
                                    height="29.71" />
                                <rect class="b63c9d45-055f-43a1-be74-67616c01946c" x="38.51" y="72.74" width="38.25"
                                    height="108.6" />
                                <rect class="ad36d7c5-059e-445e-aea3-654590a926ea" x="104.89" y="72.74" width="38.25"
                                    height="108.6" />
                                <rect class="ad36d7c5-059e-445e-aea3-654590a926ea" x="171.27" y="72.74" width="38.25"
                                    height="108.6" />
                                <rect class="ad36d7c5-059e-445e-aea3-654590a926ea" x="38.51" y="253.06" width="38.25"
                                    height="108.6" />
                                <rect class="ad36d7c5-059e-445e-aea3-654590a926ea" x="104.89" y="253.06" width="38.25"
                                    height="108.6" />
                                <rect class="ad36d7c5-059e-445e-aea3-654590a926ea" x="171.27" y="253.06" width="38.25"
                                    height="108.6" />
                                <rect class="ad36d7c5-059e-445e-aea3-654590a926ea" x="37.51" y="430.99" width="38.25"
                                    height="108.6" />
                                <rect class="b63c9d45-055f-43a1-be74-67616c01946c" x="103.89" y="430.99" width="38.25"
                                    height="108.6" />
                                <rect class="ad36d7c5-059e-445e-aea3-654590a926ea" x="170.27" y="430.99" width="38.25"
                                    height="108.6" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- SOL -->
        <div class="sol1"></div>
        <svg class="sol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 127.5">
            <defs>
                <style>
                    .bc6af174-7814-47a6-9d51-6d05e6b602cb {
                        fill: #96cfe2;
                    }

                    .a6fe865a-2f98-48b9-99c9-66b1e6353b13 {
                        fill: none;
                        stroke: #fff;
                        stroke-miterlimit: 10;
                        stroke-width: 3px;
                    }
                </style>
            </defs>
            <title>sol_dev</title>
            <g id="eb680816-2047-44af-83bb-0f46d0520b77" data-name="Calque 2">
                <g id="aeb1765a-28c4-475b-b2d7-d0e2ca985ef7" data-name="Calque 1">
                    <rect class="bc6af174-7814-47a6-9d51-6d05e6b602cb" y="1.5" width="1920" height="126" />
                    <line class="a6fe865a-2f98-48b9-99c9-66b1e6353b13" x1="68" y1="1.5" x2="1852" y2="1.5" />
                    <line class="a6fe865a-2f98-48b9-99c9-66b1e6353b13" x1="165" y1="32" x2="1085" y2="32" />
                    <line class="a6fe865a-2f98-48b9-99c9-66b1e6353b13" x1="1109" y1="65" x2="1467" y2="65" />
                </g>
            </g>
        </svg>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var navigateur = navigator.userAgent;
            $(".open").click(function () {
                var idBatiment = $(this).attr('id');
                $("#popup-"+idBatiment).show();
            });
            $(".background, .close").click(function () {
                $(".popup").hide();
            });
            
            wifiAnim();
            
            if ((navigateur.indexOf("Chrome") >= 1 && navigateur.indexOf("Edge") <= 0)) {
                $("#robotArm").addClass("armMouv");
                $("#robotHand").addClass("handMouv");
            };

        });
        function wifiAnim() {
            $("#w2, #w3, #w4").hide();
            $(".wifi").show()
            setInterval(function(){
                setTimeout(function(){
                    $("#w2").show();
                    setTimeout(function(){
                        $("#w3").show();
                        setTimeout(function(){
                            $("#w4").show();
                        },750);
                    },750);
                },750);
                $("#w2, #w3, #w4").hide();
            },3000);
        }
    </script>
</body>

</html>