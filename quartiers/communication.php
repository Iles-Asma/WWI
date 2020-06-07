<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Communication</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../main.js"></script>
    <?php $db = new PDO ('mysql:host=localhost;dbname=wwi', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));?>
</head>

<body class="com">
    <!-- BOUTON RETOUR -->
    <a class="retour" href="../index.html">
        <h1> &xlarr; Retour </h1>
    </a>
    <!-- POP UP -->

    <?php

    $stmt = $db -> prepare('SELECT * FROM metiers WHERE id_quartiers = 2');
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
                        <p>Bac +3</p>
                        <p>Bac +5</p>
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

        

        <div class="page">

            <!-- ARBRES -->
            <svg class="arbre1 objet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 159.95 331.93">
                <defs>
                    <style>
                        .ad3acc14-1a27-481b-9a74-e2ab0918115f {
                            fill: #8beabf;
                        }

                        .a2dda5ae-8f95-46a0-a260-c43598ea443c,
                        .f3b5922d-0a57-474d-a356-d7f0601e1a2e {
                            fill: none;
                            stroke: #fff;
                            stroke-miterlimit: 10;
                        }

                        .f3b5922d-0a57-474d-a356-d7f0601e1a2e {
                            stroke-width: 3px;
                        }

                        .a2dda5ae-8f95-46a0-a260-c43598ea443c {
                            stroke-width: 2px;
                        }
                    </style>
                </defs>
                <title>com_arbre1</title>
                <g id="b3304e35-a212-47cd-a433-9af3b0bd5414" data-name="Calque 2">
                    <g id="a53502c6-34c9-418d-b8f2-7fcda13961e2" data-name="Calque 7">
                        <path class="ad3acc14-1a27-481b-9a74-e2ab0918115f"
                            d="M24.58,132.93c-14-28.59-11.81-67,5-91.57,16.08-23.52,42-29.35,63-13.88a30.49,30.49,0,0,1,31,4.16c16.69,12.76,19.69,37.32,20,40.24a80.94,80.94,0,0,1,15,34.69c5.83,32.81-7.25,70.85-33,95.74-8.8,18.17-23.79,28.37-39,26.37-19.32-2.54-29.65-23.54-31-26.37-12.7,4-25.9-3.21-33-18C15.11,168.65,15.88,147.72,24.58,132.93Z" />
                        <line class="f3b5922d-0a57-474d-a356-d7f0601e1a2e" x1="87.58" y1="73.93" x2="87.58"
                            y2="331.93" />
                        <polyline class="f3b5922d-0a57-474d-a356-d7f0601e1a2e"
                            points="62.09 87.42 87.58 110.52 101.08 93.42" />
                        <polyline class="f3b5922d-0a57-474d-a356-d7f0601e1a2e"
                            points="70.08 132.43 87.58 162.36 111.08 128.43" />
                    </g>
                    <g id="a852d5d6-8dcb-4c43-9780-7c33ecdea370" data-name="Calque 6">
                        <path class="a2dda5ae-8f95-46a0-a260-c43598ea443c"
                            d="M90.58,8.77c-5.18-2.94-22.5-11.83-43-5.61a55.37,55.37,0,0,0-20,11.22,126.22,126.22,0,0,0-23,48.26,137.34,137.34,0,0,0,3,72.94c-1.4,3.06-11,24.69-2,49.38a56.49,56.49,0,0,0,32,33.66" />
                    </g>
                </g>
            </svg>
            <svg class="arbre2 objet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114.31 314">
                <defs>
                    <style>
                        .e09ed89a-9c86-48c5-b183-acdb0a4f6505 {
                            fill: #8beabf;
                        }

                        .a3f81c95-55e0-4e7f-8f03-7ff7944b8b74 {
                            fill: none;
                            stroke: #fff;
                            stroke-miterlimit: 10;
                            stroke-width: 3px;
                        }
                    </style>
                </defs>
                <title>com_arbre2</title>
                <g id="b9f59765-3d5d-4945-a904-d550e1d59265" data-name="Calque 2">
                    <g id="a7223fc0-c0a1-4d98-bc47-292576b88c8d" data-name="Calque 7">
                        <path class="e09ed89a-9c86-48c5-b183-acdb0a4f6505"
                            d="M53.7,4.55c-1.94-1.09-14.17-7.95-24-2.42C17.56,9,19.23,29.05,10.7,79.63c-7.85,46.56-12.56,49.12-10,66.6.78,5.32,7,43.87,36,59.34,17.39,9.26,42.13,9.89,58-7.27,10.65-11.51,13.26-26,16-41.17,1-5.38,13.61-73.78-15-106.56-5.08-5.82-7.92-6.46-17-17C65.14,18,63.31,9.94,53.7,4.55Z" />
                        <line class="a3f81c95-55e0-4e7f-8f03-7ff7944b8b74" x1="56.7" y1="70" x2="56.7" y2="314" />
                        <polyline class="a3f81c95-55e0-4e7f-8f03-7ff7944b8b74"
                            points="38.2 69.5 55.7 100.98 75.2 91.5" />
                        <polyline class="a3f81c95-55e0-4e7f-8f03-7ff7944b8b74"
                            points="38.2 136.5 56.7 145.66 75.2 133.5" />
                    </g>
                </g>
            </svg>
            <svg class="arbre3 objet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 132.45 339.94">
                <defs>
                    <style>
                        .a7da705b-3a77-4d4e-abba-ec40df4bb88b {
                            fill: #8beabf;
                        }

                        .adc124a5-d760-4008-ab7b-40040c9f0ae8 {
                            fill: none;
                            stroke: #fff;
                            stroke-miterlimit: 10;
                            stroke-width: 2px;
                        }
                    </style>
                </defs>
                <title>com_arbre3</title>
                <g id="e3071b8a-84f5-441f-a564-58b9a2f61b18" data-name="Calque 2">
                    <g id="a9feaecb-ebea-41ad-910d-ab01ebd1d0f0" data-name="Calque 10">
                        <path class="a7da705b-3a77-4d4e-abba-ec40df4bb88b"
                            d="M27.18,4.94C7.87,12.23-.08,37.85.18,55.94c.35,24.16,15.24,26,17,50,2.15,29.25-19.36,35.72-17,66,.86,11.05,3.49,7.13,17,45,11,30.77,11.08,38.52,20,45,11.66,8.46,30.53,9,44,2,31.93-16.68,41.19-80.13,24-122-4.73-11.54-9.83-17.42-11-31-2.32-26.95,15-35.69,11-57s-25.46-34-34-39C60.45,8.65,43.56-1.25,27.18,4.94Z" />
                        <line class="adc124a5-d760-4008-ab7b-40040c9f0ae8" x1="57.18" y1="67.94" x2="57.18"
                            y2="339.94" />
                        <polyline class="adc124a5-d760-4008-ab7b-40040c9f0ae8"
                            points="41.18 58.94 57.18 95.94 71.18 82.94" />
                        <polyline class="adc124a5-d760-4008-ab7b-40040c9f0ae8"
                            points="41.18 139.94 56.18 155.94 78.18 132.94" />
                        <polyline class="adc124a5-d760-4008-ab7b-40040c9f0ae8"
                            points="41.18 193.94 59.18 211.94 78.18 183.94" />
                    </g>
                    <g id="baa5330a-e936-4550-bd2a-cb7042bfe2b5" data-name="Calque 6">
                        <path class="adc124a5-d760-4008-ab7b-40040c9f0ae8"
                            d="M71.18.94c40.86,15.13,52.33,33.19,54.67,47.6,3.16,19.44-10.62,30.31-10,61.88.46,23.85,8.6,32,13.09,53.31,4.21,20,5.07,50.77-13.09,95.21" />
                    </g>
                </g>
            </svg>


            <!-- BATIMENTS + NOMS -->
            <div class="batiments">

                <!-- RESPONSABLE MARKETING -->
                <div class="marketing building">

                    <h3>Responsable <br> de marketing</h3>
                    <svg class="open" id="5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 262 757">
                        <defs>
                            <style>
                                .fc371399-3336-40f9-8c45-b44f35f89c39 {
                                    fill: #5765b2;
                                }

                                .ad7dea36-bd3d-482f-a244-dcfc9ab9ed44 {
                                    fill: #ffd985;
                                }

                                .b7d6bd05-59f4-4bd5-ae47-d8c8cd5a3305,
                                .bed7af7d-63c0-4d49-83ad-c635006bdc29,
                                .bfe93a73-9d60-4fb6-bd54-2ed084d13c21 {
                                    fill: none;
                                    stroke-miterlimit: 10;
                                }

                                .bfe93a73-9d60-4fb6-bd54-2ed084d13c21 {
                                    stroke: #5765b2;
                                    stroke-width: 3px;
                                }

                                .b7d6bd05-59f4-4bd5-ae47-d8c8cd5a3305,
                                .bed7af7d-63c0-4d49-83ad-c635006bdc29 {
                                    stroke: #fff;
                                    stroke-width: 2px;
                                }

                                .bed7af7d-63c0-4d49-83ad-c635006bdc29 {
                                    stroke-linecap: round;
                                }
                            </style>
                        </defs>
                        <title>com_bat1</title>
                        <g id="b76279d8-6bf4-47b1-b735-3d168faeb7ca" data-name="Calque 2">
                            <g id="a4af445d-cc39-47ff-8b26-4884acf93890" data-name="Calque 4">
                                <path class="fc371399-3336-40f9-8c45-b44f35f89c39"
                                    d="M262,757H14.68V59.7h59.2L135.71,7.28,202.8,59.7H262Z" />
                                <path class="ad7dea36-bd3d-482f-a244-dcfc9ab9ed44" d="M166,59.7H68.62L135.71,7.28Z" />
                                <rect class="ad7dea36-bd3d-482f-a244-dcfc9ab9ed44" x="14.68" y="59.7" width="151.29"
                                    height="697.3" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="99.32" x2="135.71"
                                    y2="99.32" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="131.02" x2="135.71"
                                    y2="131.02" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="162.71" x2="135.71"
                                    y2="162.71" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="332.21" x2="135.71"
                                    y2="332.21" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="265.11" x2="135.71"
                                    y2="265.11" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="298.08" x2="135.71"
                                    y2="298.08" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="230.98" x2="135.71"
                                    y2="230.98" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="196.85" x2="135.71"
                                    y2="196.85" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="366.34" x2="135.71"
                                    y2="366.34" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="400.48" x2="135.71"
                                    y2="400.48" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="434.61" x2="135.71"
                                    y2="434.61" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="29.21" y1="468.74" x2="135.71"
                                    y2="468.74" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="27.15" y1="513.14" x2="135.52"
                                    y2="513.14" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="27.15" y1="545.89" x2="135.52"
                                    y2="545.89" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="27.15" y1="578.64" x2="135.52"
                                    y2="578.64" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="27.15" y1="611.38" x2="135.52"
                                    y2="611.38" />
                                <line class="bfe93a73-9d60-4fb6-bd54-2ed084d13c21" x1="27.15" y1="644.13" x2="135.52"
                                    y2="644.13" />
                            </g>
                            <g id="b5526cbe-5fe5-41e2-a574-962483b34bdf" data-name="Calque 6">
                                <path class="bed7af7d-63c0-4d49-83ad-c635006bdc29"
                                    d="M1,307.8Q2.58,179.53,4.16,51.26h60L127.29,1" />
                                <line class="b7d6bd05-59f4-4bd5-ae47-d8c8cd5a3305" x1="176.75" y1="316.17" x2="176.75"
                                    y2="714.07" />
                            </g>
                        </g>
                    </svg>
                </div>

                <div class="data building">
                    <h3>Data scientist</h3>
                    <svg class="open" id="6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 378 778.5">
                        <defs>
                            <style>
                                .f734ffed-949a-4817-a4fd-ebfb306e9e48 {
                                    fill: #ffd985;
                                }

                                .b5606d4d-c5e3-4bd9-a22c-98493d9823ef {
                                    fill: #a5a5a5;
                                }

                                .a06f33aa-fe01-420c-ad87-279f4bcb7d35 {
                                    fill: #fff;
                                }

                                .b4d8f062-fe35-4236-95db-07948b1268c2 {
                                    fill: #8beabf;
                                }

                                .f1cbae92-9d3b-41d5-834d-2f85b1f368f9 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px;
                                }
                            </style>
                        </defs>
                        <title>com_bat2</title>
                        <g id="eab06daa-902a-4525-9fcc-b0fb3acd97cb" data-name="Calque 2">
                            <g id="a305df08-13c2-431e-8576-9a817023b118" data-name="Calque 3">
                                <rect class="f734ffed-949a-4817-a4fd-ebfb306e9e48" x="64.86" y="93.89" width="264.65"
                                    height="684.61" />
                                <rect class="f734ffed-949a-4817-a4fd-ebfb306e9e48" x="57.83" y="75" width="279.67"
                                    height="19.33" />
                                <polygon class="b5606d4d-c5e3-4bd9-a22c-98493d9823ef"
                                    points="64.86 93.89 329.52 148.2 329.52 93.89 64.86 93.89" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="118.94" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="144.43" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="169.91" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="195.4" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="220.89" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="246.37" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="271.86" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="297.34" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="322.83" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="348.31" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="373.8" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="399.29" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="424.77" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="450.26" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="552.2" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="577.69" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="526.72" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="501.23" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="475.74" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="603.17" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="628.66" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.39" y="654.15" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.48" y="679.63" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="84.07" y="705.12" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="119.3" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="144.78" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="170.27" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="195.76" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="221.24" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="246.73" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="272.21" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="297.7" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="323.19" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="348.67" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="374.16" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="399.64" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="425.13" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="450.62" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="552.56" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="578.05" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="527.07" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="501.59" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="476.1" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="603.53" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="629.02" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.51" y="654.5" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.59" y="679.99" width="103.58"
                                    height="7.03" />
                                <rect class="a06f33aa-fe01-420c-ad87-279f4bcb7d35" x="209.18" y="705.48" width="103.58"
                                    height="7.03" />
                            </g>
                            <g id="a841b696-1249-4f3d-b73e-76f8067d1606" data-name="Calque 7">
                                <path class="b4d8f062-fe35-4236-95db-07948b1268c2"
                                    d="M329.71,346.5c13,14.06,29.77,35.72,39.7,64,14.32,40.82,7.41,75.8,2.94,97-10.88,51.57-30,53.12-23.53,83,5.74,26.41,23.88,39.88,14.7,62-6.21,15-21.41,25.39-33.81,32Z" />
                            </g>
                            <g id="be2e4a3d-1890-4192-ace0-30027416985c" data-name="Calque 6">
                                <path class="f1cbae92-9d3b-41d5-834d-2f85b1f368f9"
                                    d="M23.14,186.39c-3.58-2.8-19.25-15.66-21.8-37.51C-2.2,118.52,22.88,98.79,24.6,97.49a48,48,0,0,1,2.9-61.12C43.28,18.91,70,14.21,91.45,25.26A52.21,52.21,0,0,1,143.77,1.65C165.92,5.2,183.3,22.8,185.92,44.71" />
                            </g>
                        </g>
                    </svg>
                </div>

                <!-- CHEF DE PROJET -->
                <div class="projet building">
                    <h3>Chef de projet</h3>
                    <svg class="open" id="7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.65 919.41">
                        <defs>
                            <style>
                                .a9243618-3155-4637-89ec-3b2aeb879f24 {
                                    fill: #5765b2;
                                }

                                .f2fefcce-2761-4098-9a52-ba9e6d6f008a,
                                .f5308435-84f6-4a28-96fe-ae9a6f332b4c,
                                .f8d7e86f-540a-4162-8e3e-8235d36cc707 {
                                    fill: none;
                                    stroke-miterlimit: 10;
                                }

                                .f8d7e86f-540a-4162-8e3e-8235d36cc707 {
                                    stroke: #5765b2;
                                }

                                .f2fefcce-2761-4098-9a52-ba9e6d6f008a,
                                .f8d7e86f-540a-4162-8e3e-8235d36cc707 {
                                    stroke-width: 8px;
                                }

                                .f2fefcce-2761-4098-9a52-ba9e6d6f008a {
                                    stroke: #efc581;
                                }

                                .f5308435-84f6-4a28-96fe-ae9a6f332b4c {
                                    stroke: #fff;
                                    stroke-width: 2px;
                                }
                            </style>
                        </defs>
                        <title>com_bat3</title>
                        <g id="ac5c6587-708e-4a87-8535-614b7ff18fea" data-name="Calque 2">
                            <g id="ff793da6-6d77-4001-baf2-c2379711c248" data-name="Calque 2">
                                <rect class="a9243618-3155-4637-89ec-3b2aeb879f24" x="64.65" y="185.6" width="219"
                                    height="733.81" />
                                <line class="f8d7e86f-540a-4162-8e3e-8235d36cc707" x1="177.01" y1="146.61"
                                    x2="177.01" />
                                <ellipse class="a9243618-3155-4637-89ec-3b2aeb879f24" cx="176.54" cy="113.66" rx="23.05"
                                    ry="27.78" />
                                <rect class="a9243618-3155-4637-89ec-3b2aeb879f24" x="110" y="113.66" width="134.06"
                                    height="81.13" />
                                <line class="f2fefcce-2761-4098-9a52-ba9e6d6f008a" x1="104.99" y1="238.55" x2="104.99"
                                    y2="874.01" />
                                <line class="f2fefcce-2761-4098-9a52-ba9e6d6f008a" x1="142.45" y1="238.55" x2="142.45"
                                    y2="874.01" />
                                <line class="f2fefcce-2761-4098-9a52-ba9e6d6f008a" x1="177.03" y1="238.55" x2="177.03"
                                    y2="874.01" />
                                <line class="f2fefcce-2761-4098-9a52-ba9e6d6f008a" x1="211.61" y1="238.55" x2="211.61"
                                    y2="874.01" />
                                <line class="f2fefcce-2761-4098-9a52-ba9e6d6f008a" x1="246.19" y1="238.55" x2="246.19"
                                    y2="874.01" />
                            </g>
                            <g id="e29f6200-1219-4ea2-869c-92c865e8d2f2" data-name="Calque 6">
                                <path class="f5308435-84f6-4a28-96fe-ae9a6f332b4c"
                                    d="M66.34,131.74l-1.8,15.69L48.19,131.74H14.79C7.18,131.74,1,126,1,118.9v-25c0-7.08,6.18-12.83,13.79-12.83H66.34c7.62,0,13.8,5.75,13.8,12.83v25a13,13,0,0,1-3.1,8.54C73,132.1,67.05,131.78,66.34,131.74Z" />
                                <line class="f5308435-84f6-4a28-96fe-ae9a6f332b4c" x1="70.38" y1="92.45" x2="11.23"
                                    y2="92.45" />
                                <line class="f5308435-84f6-4a28-96fe-ae9a6f332b4c" x1="68.71" y1="114.11" x2="27.89"
                                    y2="114.11" />
                                <line class="f5308435-84f6-4a28-96fe-ae9a6f332b4c" x1="70.38" y1="103.28" x2="11.23"
                                    y2="103.28" />
                            </g>
                        </g>
                    </svg>
                </div>

                <!-- CHARGE DE COMMUNICATION -->
                <div class="charge building">
                    <h3>Chargé de communication</h3>
                    <svg class="open" id="8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255.88 663.26">
                        <defs>
                            <style>
                                .a912e631-3de0-4b97-8489-4885b45eb21f {
                                    fill: #a5a5a5;
                                }

                                .f8946ae5-bce4-4938-acbe-0c8170c8f3a2 {
                                    fill: #fff;
                                }

                                .e5ce14b4-c42f-4792-9fc9-696c3bb8b24f {
                                    fill: #ffd985;
                                }

                                .fc11c78f-cb92-48e1-ae40-99ca48b702f4 {
                                    fill: #ffd00b;
                                }

                                .a7dc8be8-d1f8-4ead-907a-ff8e0b6733d9 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px;
                                }
                            </style>
                        </defs>
                        <title>com_bat4</title>
                        <g id="a5037b65-a406-4d9b-935f-5c39416042f9" data-name="Calque 2">
                            <g id="a3442fcf-ebee-443e-8ed2-dd4ab8fd55a9" data-name="Calque 9">
                                <rect class="a912e631-3de0-4b97-8489-4885b45eb21f" x="7.52" y="112.75" width="248.37"
                                    height="550.51" />
                                <rect class="f8946ae5-bce4-4938-acbe-0c8170c8f3a2" x="25.69" y="134.18" width="212.02"
                                    height="469.95" />
                                <polygon class="e5ce14b4-c42f-4792-9fc9-696c3bb8b24f"
                                    points="103.11 313.46 135.3 260.96 173.91 328.45 212.53 350.95 193.22 403.45 218.97 440.94 180.35 448.44 161.04 500.93 109.55 470.94 64.5 493.43 70.93 433.44 38.75 403.45 58.06 365.95 32.31 298.46 103.11 313.46" />
                                <polygon class="fc11c78f-cb92-48e1-ae40-99ca48b702f4"
                                    points="105.73 327.75 130.61 287.17 160.47 339.35 190.33 356.74 175.4 397.33 195.31 426.32 165.45 432.12 150.52 472.7 110.71 449.51 75.87 466.9 80.85 420.52 55.97 397.33 70.89 368.34 50.99 316.15 105.73 327.75" />
                                <polygon class="e5ce14b4-c42f-4792-9fc9-696c3bb8b24f"
                                    points="177.13 289.2 183.19 268.02 219.54 253.91 195.31 275.08 177.13 289.2" />
                                <polygon class="e5ce14b4-c42f-4792-9fc9-696c3bb8b24f"
                                    points="80.21 275.08 68.09 232.73 86.27 253.91 80.21 275.08" />
                                <polygon class="e5ce14b4-c42f-4792-9fc9-696c3bb8b24f"
                                    points="201.36 486.82 213.48 536.22 195.31 522.11 201.36 515.05 201.36 486.82" />
                                <polygon class="e5ce14b4-c42f-4792-9fc9-696c3bb8b24f"
                                    points="92.32 515.05 104.44 543.28 104.44 515.05 92.32 493.88 92.32 515.05" />
                                <polygon class="e5ce14b4-c42f-4792-9fc9-696c3bb8b24f"
                                    points="38.37 465.64 49.92 437.41 49.92 458.58 38.37 465.64" />
                            </g>
                            <g id="f1a91ee5-6f49-45f5-b56a-43b5bae17955" data-name="Calque 6">
                                <path class="a7dc8be8-d1f8-4ead-907a-ff8e0b6733d9"
                                    d="M.88,87l33-61.65L80.88,61,148.44,1.61,180.4,66l53.14-9.61-.66,45.7" />
                            </g>
                        </g>
                    </svg>
                </div>

                <div class="manager building">
                    <h3>Community manager</h3>
                    <svg class="open" id="9" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 307.37 756">
                        <defs>
                            <style>
                                .a034900d-e357-455f-ba03-7cee03a4b292 {
                                    fill: #5765b2;
                                }

                                .b0eacb62-c246-4c94-8e01-5872fcd8ff67 {
                                    fill: #ffd985;
                                }

                                .b05a0d58-71b9-4c51-b306-76d300d5de4f {
                                    fill: #fff;
                                }

                                .f463a7d0-72f3-43d5-97a8-a53868561bf0 {
                                    fill: #8beabf;
                                }

                                .a2d5dd71-f461-40e7-b8fc-1141cf6b3896 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-miterlimit: 10;
                                    stroke-width: 2px;
                                }
                            </style>
                        </defs>
                        <title>com_bat5</title>
                        <g id="bed64c4f-e203-41ff-bb1d-97f5e1003ac0" data-name="Calque 2">
                            <g id="f59e5b30-8309-4da2-b9fb-58769f9c6958" data-name="Calque 5">
                                <rect class="a034900d-e357-455f-ba03-7cee03a4b292" x="57.2" y="67.26" width="250.17"
                                    height="688.74" />
                                <rect class="a034900d-e357-455f-ba03-7cee03a4b292" x="78.22" y="29.83" width="207.07"
                                    height="38.5" />
                                <rect class="a034900d-e357-455f-ba03-7cee03a4b292" x="110.8" y="11.64" width="141.9"
                                    height="21.39" />
                                <path class="b0eacb62-c246-4c94-8e01-5872fcd8ff67"
                                    d="M186.51,116.89h4.09a80,80,0,0,1,80,80V601.79a80,80,0,0,1-80,80h-4.09a0,0,0,0,1,0,0V116.89A0,0,0,0,1,186.51,116.89Z" />
                                <path class="b05a0d58-71b9-4c51-b306-76d300d5de4f"
                                    d="M172.91,116.89H177a0,0,0,0,1,0,0V681.77a0,0,0,0,1,0,0H92.93a0,0,0,0,1,0,0V196.87a80,80,0,0,1,80-80Z" />
                            </g>
                            <g id="ade23f4a-5b3f-4137-9f76-aa44552acb69" data-name="Calque 10">
                                <path class="f463a7d0-72f3-43d5-97a8-a53868561bf0"
                                    d="M57,207c-8.79,5-20.32,13.48-27.22,28-8.29,17.45-5.32,34-4.53,48C27.79,328.51,6.52,334.1.75,383c-3.24,27.41,4.19,59.6,19.05,124,13,56.19,16.89,52.83,17.24,74,.7,42.48-14.91,67.37-1.81,97A69,69,0,0,0,57,705Z" />
                            </g>
                            <g id="e6e321b2-eeaf-4448-95b4-7659f6d28551" data-name="Calque 6">
                                <polyline class="a2d5dd71-f461-40e7-b8fc-1141cf6b3896"
                                    points="45.63 59.82 67.71 59.82 67.71 22.39 103.45 20.25 103.45 1 240.09 1" />
                            </g>
                        </g>
                    </svg>
                </div>

            </div>
        </div>

        <!-- SOL -->
        <div class="sol1"></div>
        <svg class="sol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 126">
            <defs>
                <style>
                    .bc7bd962-3b0c-4ca9-90d8-eb4b917eaddc {
                        fill: #fcbdb6;
                    }

                    .b6ea473f-d90c-4645-b274-43c7c63337b8 {
                        fill: none;
                        stroke: #fff;
                        stroke-linecap: round;
                        stroke-miterlimit: 10;
                        stroke-width: 2px;
                    }
                </style>
            </defs>
            <title>com_sol</title>
            <g id="e0a2b9ed-1835-4d52-a4ca-2745b06831aa" data-name="Calque 2">
                <g id="e6194625-0a3d-4251-bc85-9396473572c4" data-name="Calque 1">
                    <rect class="bc7bd962-3b0c-4ca9-90d8-eb4b917eaddc" width="1920" height="126" />
                    <line class="b6ea473f-d90c-4645-b274-43c7c63337b8" x1="21" y1="1" x2="1899" y2="1" />
                    <line class="b6ea473f-d90c-4645-b274-43c7c63337b8" x1="164.77" y1="22.27" x2="928" y2="22.27" />
                    <line class="b6ea473f-d90c-4645-b274-43c7c63337b8" x1="1178.77" y1="47.27" x2="1648" y2="47.27" />
                    <line class="b6ea473f-d90c-4645-b274-43c7c63337b8" x1="434.77" y1="84.27" x2="1198" y2="84.27" />
                </g>
            </g>
        </svg>
    </section>




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
            if ((navigateur.indexOf("Chrome") >= 1 && navigateur.indexOf("Edge") <= 0)) {
                $("#cloud").addClass("cloudMouv");
                $("#bat2").addClass("bat2Mouv");
            }

        });
    </script>
</body>

</html>