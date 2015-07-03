<?php
    $this->layout = false;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Noddi</title>

        <meta charset="utf-8" />

        <meta name="description" content="Page description. No longer than 155 characters." />

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Noddi">
        <meta itemprop="description" content="Noddi est une plateforme de matching entre les marques et les modeuses.">
        <meta itemprop="image" content="http://www.noddi.eu/logo.svg">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="http://www.noddi.eu/">
        <meta name="twitter:title" content="Noddi">
        <meta name="twitter:description" content="Noddi est une plateforme de matching entre les marques et les modeuses.">
        <meta name="twitter:creator" content="@TheNoddi">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="http://www.example.com/image.html">

        <!-- Open Graph data -->
        <meta property="og:title" content="Noddi" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.noddi.eu/" />
        <meta property="og:image" content="http://noddi.eu/img/logo.svg" />
        <meta property="og:description" content="Noddi est une plateforme de matching entre les marques et les modeuses." />
        <meta property="og:site_name" content="Noddi" />

        <link rel="icon" href="img/favicon2.ico.png" type="image/x-icon" />
        <?= $this->Html->css('index') ?>
    </head>

    <body>

        <header>

            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 420" class="polylion">
                    <defs>
                        <filter id="polycleaner">
                            <feComponentTransfer>
                                <feFuncA type="table" tableValues="0 0.5 1 1" />
                            </feComponentTransfer>
                        </filter>
                    </defs>

                    <g filter="url(#polycleaner)" class="animation">
                        <polygon fill="#FBE5D8" points="131.542,212.307 129.831,205.343 122.608,204.095         "/>
                        <polygon fill="#FAD9BE" points="131.542,212.307 129.831,205.343 132.616,207.301 137.929,216.411         "/>
                        <polygon fill="#F4A08C" points="122.608,204.095 121.36,202.853 122.317,201.899 129.831,205.343      "/>
                        <polygon fill="#EA887F" points="138.481,220.75 133.532,208.929 130.526,207.747      "/>
                        <polygon fill="#ED8D7A" points="145.614,220.364 133.532,208.325 133.532,212.553         "/>
                        <polygon fill="#F3956F" points="137.017,169.427 135.587,168.157 135.526,159.571 145.046,169.051         "/>
                        <polygon fill="#EB6255" points="137.017,169.427 145.046,169.051 151.302,182.825         "/>
                        <polygon fill="#EF8771" points="145.046,169.051 162.257,186.198 151.302,182.825         "/>
                        <polygon fill="#EB6257" points="151.302,182.825 162.257,186.198 168.192,199.657         "/>
                        <polygon fill="#EF794C" points="135.587,150.434 129.644,160.317 129.644,149.278         "/>
                        <polygon fill="#F59F6B" points="129.644,160.317 135.587,150.434 135.587,165.704         "/>
                        <polygon fill="#EB6255" points="129.644,160.317 135.587,165.704 130.235,179.853         "/>
                        <polygon fill="#EF8075" points="135.587,165.704 135.587,189.958 130.235,179.853         "/>
                        <polygon fill="#ED7987" points="130.235,179.853 135.587,189.958 130.235,203.655         "/>
                        <polygon fill="#F9C2AA" points="130.235,203.655 135.587,189.958 135.079,209.944         "/>
                        <polygon fill="#F09494" points="130.235,203.655 135.03,232.102 135.079,209.944      "/>
                        <polyline fill="#FAD8BE" points="135.03,232.102 129.644,224.202 130.235,203.655         "/>
                        <polyline fill="#F9E4D9" points="135.079,232.175 129.644,224.202 128.657,238.466 135.03,232.102         "/>
                        <path fill="#F9E4D9" d="M128.657,238.466"/>
                        <polygon fill="#F09494" points="139.7,238.466 128.657,238.466 135.03,232.102        "/>
                        <polygon fill="#FAE4D6" points="148.665,238.466 152.618,247.593 144.558,243.028         "/>
                        <polygon fill="#F09496" points="148.665,238.466 136.53,241.036 144.558,243.028      "/>
                        <polygon fill="#ED777C" points="148.665,238.466 126.778,238.466 136.53,241.036      "/>
                        <polygon fill="#ED7786" points="144.558,243.028 136.53,241.036 129.444,242.559      "/>
                        <polygon fill="#FBE5D8" points="129.444,242.559 123.569,239.011 117.856,243.028         "/>
                        <polygon fill="#F7C9BB" points="129.444,242.559 123.569,239.011 126.778,238.466 136.53,241.036      "/>
                        <polygon fill="#F09393" points="117.856,243.028 116.172,243.028 116.172,241.739 123.569,239.011         "/>
                        <polyline fill="#FAD8BE" points="139.058,213.835 137.712,208.895 135.079,209.944 139.058,213.835        "/>
                        <polygon fill="#FAE4D6" points="145.614,220.364 141.343,231.093 138.481,220.75      "/>
                        <polygon fill="#F4A08C" points="145.614,220.364 133.532,212.553 138.481,220.75      "/>
                        <polygon fill="#EE8076" points="162.257,186.198 171.478,196.696 168.192,199.657         "/>
                        <polygon fill="#F09393" points="168.192,199.657 163.278,194.761 157.741,202.905         "/>
                        <polygon fill="#F7CABC" points="163.278,194.761 152.144,198.297 157.741,202.905         "/>
                        <polygon fill="#F9E4D9" points="157.741,202.905 143.784,207.239 152.144,198.297         "/>
                        <polygon fill="#ED8D7A" points="143.784,207.239 139.058,208.706 152.144,198.297         "/>
                        <polygon fill="#ED7887" points="151.94,198.454 136.454,203.274 139.058,208.706      "/>
                        <polygon fill="#F9E4D9" points="139.058,208.706 136.454,203.274 135.079,209.944         "/>
                        <polygon fill="#FAD9BE" points="135.079,209.944 136.454,203.274 135.239,203.655         "/>
                        <polygon fill="#010202" points="197.243,87.754 207.39,84.947 200.399,100.778        "/>
                        <polygon fill="#EF918F" points="207.39,84.947 195.667,71.024 197.243,87.754         "/>
                        <polygon fill="#ED6F6C" points="195.667,71.024 188.685,75.403 197.243,87.754        "/>
                        <polygon fill="#F2AFA6" points="194.542,65.296 188.685,75.403 195.667,71.024        "/>
                        <polygon fill="#F0947F" points="194.542,65.296 184.173,58.224 188.685,75.403        "/>
                        <polygon fill="#F3B5AD" points="188.685,75.403 175.271,74.729 184.173,58.224        "/>
                        <polygon fill="#EE7F76" points="188.685,75.403 175.271,74.729 173.47,79.387         "/>
                        <polygon fill="#EF8771" points="175.271,74.729 166.483,66.812 184.173,58.224        "/>
                        <polygon fill="#EB6257" points="175.271,74.729 166.483,66.812 173.47,79.387         "/>
                        <polygon fill="#EF8075" points="173.47,79.387 172.452,94.265 162.765,87.754         "/>
                        <polygon fill="#EB6654" points="162.765,87.754 166.483,66.812 173.47,79.387         "/>
                        <polygon fill="#EB7A68" points="172.452,94.265 162.765,87.754 169.747,108.077 181.47,108.077        "/>
                        <polygon fill="#EB6255" points="181.47,108.077 180.114,121.1 169.747,108.077        "/>
                        <polygon fill="#F09594" points="181.47,108.077 188.685,123.796 180.114,121.1        "/>
                        <polygon fill="#F3B5AD" points="180.114,121.1 174.708,139.684 188.685,123.796       "/>
                        <polygon fill="#F09494" points="188.685,123.796 189.919,143.108 174.708,139.684         "/>
                        <polygon fill="#EF8771" points="189.919,143.108 180.114,159.051 174.708,139.403         "/>
                        <polygon fill="#F09494" points="180.114,159.051 157.917,168.259 174.708,139.403         "/>
                        <polygon fill="#F09494" points="174.708,139.403 166.819,127.277 139.659,159.051         "/>
                        <polygon fill="#EF8075" points="139.659,159.051 157.917,168.598 174.708,139.403         "/>
                        <polygon fill="#EF8771" points="139.659,159.051 134.024,171.292 142.026,168.598         "/>
                        <polygon fill="#EB6255" points="142.026,168.598 157.917,168.598 139.659,159.051         "/>
                        <polygon fill="#EB6255" points="134.024,171.292 120.276,164.555 139.659,159.051         "/>
                        <polygon fill="#EE7F75" points="134.024,171.292 129.823,172.862 120.276,164.555         "/>
                        <polygon fill="#EF8771" points="129.823,172.862 117.46,174.661 120.276,164.555      "/>
                        <polygon fill="#EB6255" points="117.46,174.661 103.032,160.401 120.276,164.555      "/>
                        <polygon fill="#EE8871" points="103.032,160.401 96.95,155.012 121.181,140.638       "/>
                        <polygon fill="#F09494" points="120.276,164.555 121.181,140.638 103.032,160.401         "/>
                        <polygon fill="#EF8075" points="120.276,164.555 121.181,140.638 139.659,159.051         "/>
                        <polygon fill="#F0957F" points="121.181,140.638 166.819,127.277 139.659,159.051         "/>
                        <polygon fill="#F3B5AD" points="166.819,127.277 154.312,112.23 121.181,140.638      "/>
                        <polygon fill="#EF8771" points="121.181,140.638 133.237,110.995 154.312,112.23      "/>
                        <polygon fill="#EF8771" points="133.237,110.995 104.501,121.1 121.181,140.638       "/>
                        <polygon fill="#EB6255" points="104.501,121.1 96.95,155.012 121.181,140.638         "/>
                        <polygon fill="#EB6255" points="96.95,155.012 56.042,157.706 103.032,160.401        "/>
                        <polygon fill="#F09494" points="96.95,155.012 56.042,157.706 104.501,121.1      "/>
                        <path fill="#303031" d="M175.815,39.438c1.908,0.168,3.809,0.332,5.717,0.498c1.43,0.162,2.859,0.325,4.287,0.486
                            c2.178,0.54,6.869,1.052,8.529,0.969c1.059-0.052,3.131,0.232,3.443,0.982c0.188,0.994-0.875,3.988-1.174,4.953
                            c-1.043,3.368-1.002,7.774-1.6,11.79c2.051,0.403,4.582,3.355,5.379,4.955c0.27,0.545,1,1.53,0.762,2.397
                            c-0.436,1.562-2.436,2.789-4.059,3.338c-3.188,1.081-7.783,0.399-11.166-0.744c-5.834-1.961-11.848-3.19-17.145-5.408
                            c-2.385-0.999-7.688-1.559-6.59-4.833c0.623-0.278,1.152-0.502,2.027-0.392c0.357,0.048,0.713,0.1,1.07,0.152
                            c0.758-0.104,1.857-0.509,2.598-0.346c0.426-4.322,1.607-9.435,1.281-13.973c-0.076-1.014-0.082-4.574,0.48-4.902
                            C171.212,38.646,174.183,39.921,175.815,39.438z"/>
                    </g>

                    
                    <ellipse fill="none" stroke="#434444" stroke-width="6.011" stroke-miterlimit="10" cx="149.474" cy="143.154" rx="136.084" ry="130.5"/>
                    <g>
                        <path fill="none" stroke="#434444" stroke-width="3.0055" stroke-miterlimit="10" stroke-dasharray="3.7921,3.7921" d="
                            M297.335,143.153c0,78.312-66.201,141.795-147.859,141.795c-81.662,0-147.863-63.483-147.863-141.795
                            c0-78.311,66.199-141.792,147.863-141.792C231.132,1.361,297.335,64.843,297.335,143.153z"/>
                    </g>

                    <path fill="#3A3A3A" d="M47.54,331.288c-0.37,1.328-0.831,3.229-1.385,5.7c-0.553,2.476-1.146,5.3-1.771,8.472
                        c-0.628,3.174-1.292,6.514-1.991,10.018c-0.703,3.506-1.33,6.959-1.884,10.354c-0.553,3.395-1.052,6.586-1.493,9.573
                        c-0.443,2.99-0.701,5.521-0.775,7.585c-0.074,2.284-0.074,4.538,0,6.754c0.074,1.92,0.203,3.93,0.389,6.032
                        c0.186,2.104,0.533,3.968,1.053,5.593c-1.257,0.59-2.363,1.012-3.32,1.271c-0.961,0.258-1.735,0.459-2.326,0.609
                        c-0.738,0.146-1.366,0.221-1.881,0.221c-0.592,0-1.293-0.055-2.104-0.166c-0.812-0.109-1.55-0.498-2.214-1.162
                        c-0.665-0.664-1.219-1.699-1.661-3.1c-0.442-1.402-0.589-3.435-0.442-6.09c0.074-1.771,0.353-3.97,0.83-6.588
                        c0.48-2.619,1.053-5.494,1.717-8.636c0.664-3.137,1.42-6.383,2.27-9.742c0.85-3.356,1.68-6.643,2.491-9.854
                        c0.812-3.209,1.567-6.254,2.271-9.133c0.699-2.879,1.309-5.353,1.826-7.418c0.665-2.656,1.4-5.756,2.215-9.299
                        c1.4-6.052,3.506-15.13,6.311-27.234c0.516-0.369,1.068-0.719,1.66-1.051c0.59-0.332,1.106-0.609,1.551-0.832
                        c0.516-0.293,1.033-0.517,1.55-0.664c2.36-0.885,4.041-0.996,5.037-0.332c0.995,0.664,1.567,1.994,1.716,3.983
                        c0.072,1.33,0.238,3.25,0.498,5.759c0.258,2.51,0.499,5.313,0.721,8.414c0.223,3.1,0.404,6.295,0.555,9.575
                        c0.146,3.283,0.221,6.328,0.221,9.136c0,1.844,0.035,4.021,0.111,6.528c0.072,2.513,0.184,5.168,0.332,7.974
                        c0.146,2.807,0.332,5.664,0.553,8.58c0.222,2.916,0.48,5.7,0.775,8.356s0.608,5.092,0.94,7.308
                        c0.332,2.215,0.683,4.022,1.052,5.426c0.146,0.59,0.312,1.145,0.498,1.66c0.186,0.515,0.352,1.032,0.499,1.551
                        c0.442-1.771,0.94-3.875,1.494-6.312c0.554-2.436,1.146-5.037,1.771-7.805c0.627-2.768,1.234-5.607,1.826-8.523
                        c0.59-2.916,1.105-5.661,1.551-8.247c0.369-2.064,0.773-4.724,1.219-7.972c0.441-3.248,0.957-6.754,1.55-10.518
                        c-0.812-0.293-1.589-0.592-2.325-0.888c-0.664-0.293-1.328-0.663-1.992-1.104c-0.664-0.443-1.218-0.959-1.66-1.551
                        c0.072-0.957,0.166-1.66,0.276-2.104c0.11-0.443,0.46-0.479,1.052-0.11c0.442,0.223,1.125,0.479,2.049,0.774
                        c0.922,0.295,2.01,0.519,3.267,0.664c0.368-2.063,0.793-4.133,1.272-6.201c0.479-2.062,0.978-4.057,1.494-5.977
                        c0.811-3.172,1.732-6.035,2.768-8.58c1.033-2.547,2.232-4.705,3.6-6.477c1.364-1.771,2.971-3.14,4.814-4.099
                        c1.845-0.957,3.984-1.477,6.422-1.551c2.287,0,4.15,0.941,5.591,2.824c1.44,1.881,2.048,5.146,1.827,9.797
                        c-0.149,3.471-0.868,6.588-2.159,9.354c-1.293,2.771-2.86,5.205-4.705,7.31c-1.847,2.104-3.875,3.838-6.089,5.203
                        c-2.215,1.366-4.316,2.344-6.311,2.934c-0.664,3.471-1.293,6.959-1.883,10.463c-0.593,3.506-1.162,6.902-1.717,10.187
                        c-0.555,3.282-1.105,6.403-1.661,9.354c-0.554,2.953-1.089,5.574-1.604,7.861c-0.518,2.213-1.069,4.61-1.659,7.192
                        c-0.519,2.218-1.146,4.763-1.882,7.642c-0.739,2.879-1.514,5.903-2.325,9.078c-0.296,0.664-0.664,1.231-1.106,1.717
                        c-0.441,0.479-0.886,0.867-1.328,1.162c-0.519,0.369-1.033,0.664-1.551,0.885c-1.477,0.59-2.73,0.701-3.764,0.332
                        c-1.034-0.371-1.957-1.367-2.768-2.988c-0.813-1.699-1.533-3.803-2.16-6.311c-0.627-2.51-1.272-5.242-1.938-8.193
                        c-0.664-3.172-1.162-6.623-1.494-10.35c-0.332-3.728-0.592-7.529-0.775-11.404c-0.186-3.875-0.313-7.729-0.387-11.568
                        c-0.074-3.836-0.223-7.454-0.442-10.85c-0.37-4.428-0.739-8.395-1.106-11.9c-0.369-3.504-0.775-6.477-1.219-8.911
                        c-0.296,1.479-0.628,3.139-0.996,4.979C48.388,327.486,47.983,329.37,47.54,331.288z M84.737,326.639
                        c-0.369,1.402-0.664,2.73-0.885,3.984c1.77-1.033,3.432-2.343,4.979-3.933c1.55-1.586,2.878-3.266,3.985-5.037
                        c1.105-1.77,1.974-3.541,2.602-5.312c0.627-1.771,0.979-3.396,1.052-4.871c0.073-1.033-0.021-1.863-0.274-2.49
                        c-0.26-0.625-0.721-0.938-1.385-0.938c-0.369,0-0.941,0.203-1.718,0.606c-0.772,0.406-1.644,1.256-2.603,2.545
                        c-0.959,1.293-1.938,3.156-2.934,5.593C86.565,319.221,85.623,322.505,84.737,326.639z"/>
                    <path fill="#3A3A3A" d="M116.813,384.835c-0.738,2.807-1.734,5.426-2.988,7.858c-1.256,2.438-2.75,4.539-4.483,6.312
                        c-1.733,1.77-3.69,3.154-5.866,4.149c-2.18,0.996-4.56,1.494-7.142,1.494c-3.027,0-5.407-0.646-7.142-1.938
                        c-1.735-1.289-3.026-2.896-3.875-4.816c-0.851-1.918-1.365-4.021-1.549-6.311c-0.186-2.285-0.277-4.428-0.277-6.42
                        c0-1.4,0.166-2.951,0.498-4.65c0.332-1.697,0.793-3.432,1.383-5.203c0.591-1.771,1.348-3.543,2.271-5.312
                        c0.922-1.771,2.012-3.396,3.268-4.871c0.441-1.256,1.123-2.363,2.048-3.322c0.922-0.957,1.991-1.752,3.21-2.379
                        c1.218-0.627,2.527-1.107,3.932-1.439c1.4-0.331,2.768-0.497,4.096-0.497c0.223,0,0.424,0.036,0.608,0.108
                        c0.185,0.074,0.39,0.15,0.608,0.224c0.959,0.071,2.158,0.44,3.599,1.104c1.438,0.666,2.841,1.662,4.207,2.99
                        c1.364,1.328,2.526,3.008,3.487,5.037c0.957,2.03,1.438,4.481,1.438,7.36c0,0.595-0.037,1.312-0.109,2.158
                        c-0.075,0.85-0.148,1.568-0.223,2.158c1.697-0.664,3.469-1.478,5.312-2.437c1.846-0.957,3.633-1.975,5.369-3.045
                        c1.732-1.065,3.338-2.157,4.816-3.266c1.475-1.107,2.656-2.104,3.543-2.988c0.734-0.664,1.361-1.033,1.881-1.106
                        c0.516-0.072,0.887,0.073,1.107,0.442s0.256,0.888,0.109,1.549c-0.148,0.664-0.555,1.402-1.219,2.216
                        c-0.371,0.44-1.312,1.328-2.822,2.655c-1.516,1.328-3.305,2.771-5.369,4.318c-2.066,1.549-4.316,3.061-6.754,4.539
                        C121.353,382.991,119.026,384.098,116.813,384.835z M91.019,387.493c0,1.325,0.072,2.639,0.223,3.93
                        c0.146,1.291,0.441,2.436,0.886,3.432c0.442,0.996,1.032,1.812,1.771,2.437c0.736,0.629,1.696,0.94,2.879,0.94
                        c1.328,0,2.547-0.312,3.652-0.94c1.107-0.625,2.104-1.438,2.989-2.437c0.886-0.996,1.678-2.141,2.38-3.432
                        c0.7-1.291,1.311-2.641,1.827-4.041c-0.519,0.074-1.017,0.129-1.495,0.166c-0.479,0.039-1.016,0.055-1.604,0.055
                        c-2.807,0-5.225-0.83-7.252-2.49c-2.029-1.659-3.599-3.778-4.705-6.364c-0.441,1.551-0.812,3.062-1.106,4.539
                        C91.165,384.762,91.019,386.163,91.019,387.493z M98.104,368.007c-0.223,0.666-0.332,1.367-0.332,2.104
                        c0,1.185,0.071,2.42,0.221,3.709c0.146,1.293,0.517,2.455,1.107,3.488c0.59,1.035,1.529,1.9,2.821,2.603
                        c1.291,0.702,3.081,1.053,5.37,1.053c0.367,0,0.736-0.019,1.105-0.058c0.369-0.034,0.736-0.092,1.106-0.165
                        c0.224-0.957,0.424-1.826,0.608-2.603c0.184-0.775,0.275-1.455,0.275-2.049c0.146-1.4,0.146-2.84,0-4.316s-0.426-2.821-0.828-4.041
                        c-0.408-1.219-0.926-2.215-1.552-2.987c-0.629-0.775-1.386-1.162-2.271-1.162c-1.402,0-2.75,0.387-4.041,1.162
                        C100.409,365.516,99.211,366.605,98.104,368.007z"/>
                    <path fill="#3A3A3A" d="M163.864,381.292c-0.371,2.289-0.721,4.467-1.053,6.533c-0.332,2.063-0.537,3.727-0.607,4.979
                        c-0.076,1.846,0.256,3.174,0.996,3.984c0.736,0.812,1.549,1.219,2.438,1.219c1.029,0,2.305-0.516,3.816-1.551
                        c1.514-1.033,3.117-2.324,4.816-3.875c1.695-1.549,3.393-3.246,5.092-5.093c1.697-1.844,3.266-3.6,4.705-5.26
                        s2.658-3.115,3.654-4.373c0.996-1.254,1.678-2.062,2.047-2.436c0.441-0.443,0.902-0.701,1.385-0.775
                        c0.479-0.069,0.865,0,1.162,0.224c0.293,0.223,0.441,0.627,0.441,1.219s-0.297,1.328-0.887,2.213
                        c-0.885,1.402-2.029,3.045-3.432,4.928c-1.404,1.881-2.953,3.818-4.648,5.812c-1.697,1.989-3.486,3.946-5.369,5.864
                        c-1.883,1.923-3.766,3.617-5.646,5.095c-1.881,1.479-3.691,2.674-5.424,3.598c-1.736,0.924-3.307,1.385-4.705,1.385
                        c-1.035,0-2.014-0.295-2.936-0.887c-0.926-0.592-1.756-1.367-2.49-2.324c-0.74-0.957-1.312-2.028-1.717-3.211
                        c-0.406-1.178-0.572-2.358-0.496-3.543c0.07-0.514,0.182-1.397,0.332-2.656c-3.102,3.474-6.223,6.22-9.355,8.248
                        c-3.139,2.029-6.145,3.045-9.021,3.045c-1.035,0-2.143-0.262-3.32-0.774c-1.186-0.516-2.234-1.365-3.154-2.545
                        c-0.926-1.181-1.682-2.73-2.27-4.65c-0.59-1.918-0.812-4.244-0.666-6.975c0.223-4.279,1.07-8.34,2.547-12.178
                        c1.475-3.839,3.338-7.179,5.592-10.021c2.248-2.84,4.795-5.094,7.639-6.754c2.84-1.66,5.701-2.49,8.58-2.49
                        c1.252,0,2.396,0.314,3.434,0.941c1.029,0.627,1.916,1.438,2.654,2.436c0.736,0.996,1.348,2.086,1.826,3.267
                        c0.48,1.182,0.83,2.289,1.053,3.319c0.516-2.141,0.996-4.244,1.439-6.311c0.441-2.064,0.885-4.021,1.328-5.867
                        c0.734-2.729,1.512-5.684,2.324-8.854c0.734-2.729,1.586-5.867,2.547-9.41c0.957-3.543,2.025-7.271,3.211-11.183
                        c0.734-0.592,1.438-1.032,2.104-1.33c0.664-0.293,1.289-0.514,1.881-0.664c0.664-0.221,1.291-0.332,1.885-0.332
                        c0.734,0,1.398,0.097,1.99,0.277c0.592,0.187,1.09,0.664,1.494,1.439c0.404,0.772,0.684,1.938,0.83,3.485
                        c0.146,1.552,0.146,3.652,0,6.312c-0.146,3.25-0.719,6.793-1.715,10.629c-0.996,3.838-2.309,7.805-3.93,11.899
                        c-1.627,4.097-3.488,8.191-5.592,12.287C168.569,373.71,166.302,377.602,163.864,381.292z M157.333,382.73
                        c0.293-1.397,0.568-2.805,0.83-4.207c0.256-1.397,0.57-2.84,0.939-4.315c-0.148,0.071-0.275,0.147-0.387,0.223
                        c-0.111,0.072-0.242,0.148-0.389,0.221c-0.812,0.371-1.367,0.353-1.662-0.055c-0.297-0.404-0.439-1.053-0.439-1.938
                        c0-0.443-0.039-1.234-0.111-2.384c-0.076-1.143-0.277-2.321-0.609-3.541c-0.332-1.219-0.828-2.284-1.492-3.211
                        c-0.664-0.924-1.59-1.385-2.77-1.385c-1.699,0-3.432,0.869-5.203,2.604c-1.771,1.731-3.432,3.838-4.98,6.311
                        c-1.549,2.475-2.846,5.111-3.875,7.916c-1.035,2.805-1.625,5.312-1.771,7.527c-0.146,3.543,0.295,6.088,1.33,7.639
                        c1.031,1.551,2.438,2.324,4.207,2.324c1.328,0,2.783-0.517,4.371-1.549c1.586-1.033,3.137-2.287,4.65-3.767
                        c1.512-1.477,2.914-2.987,4.207-4.539C155.468,385.057,156.519,383.766,157.333,382.73z"/>
                    <path fill="#3A3A3A" d="M218.665,381.292c-0.371,2.289-0.721,4.467-1.053,6.533c-0.332,2.063-0.537,3.727-0.609,4.979
                        c-0.072,1.846,0.26,3.174,0.996,3.984c0.736,0.812,1.553,1.219,2.439,1.219c1.031,0,2.303-0.516,3.816-1.551
                        c1.514-1.033,3.117-2.324,4.816-3.875c1.695-1.549,3.393-3.246,5.092-5.093c1.695-1.844,3.268-3.6,4.705-5.26
                        c1.439-1.66,2.656-3.115,3.652-4.373c0.996-1.254,1.678-2.062,2.047-2.436c0.443-0.443,0.904-0.701,1.385-0.775
                        c0.479-0.069,0.867,0,1.162,0.224c0.295,0.223,0.443,0.627,0.443,1.219s-0.295,1.328-0.889,2.213
                        c-0.885,1.402-2.027,3.045-3.432,4.928c-1.402,1.881-2.951,3.818-4.646,5.812c-1.699,1.989-3.486,3.946-5.369,5.864
                        c-1.883,1.923-3.766,3.617-5.646,5.095c-1.883,1.479-3.691,2.674-5.424,3.598c-1.736,0.924-3.305,1.385-4.705,1.385
                        c-1.035,0-2.014-0.295-2.936-0.887c-0.926-0.592-1.754-1.367-2.49-2.324c-0.74-0.957-1.312-2.028-1.715-3.211
                        c-0.408-1.178-0.574-2.358-0.5-3.543c0.07-0.514,0.184-1.397,0.334-2.656c-3.104,3.474-6.223,6.22-9.355,8.248
                        c-3.139,2.029-6.145,3.045-9.021,3.045c-1.035,0-2.145-0.262-3.32-0.774c-1.186-0.516-2.234-1.365-3.156-2.545
                        c-0.924-1.181-1.68-2.73-2.27-4.65c-0.588-1.918-0.811-4.244-0.664-6.975c0.223-4.279,1.07-8.34,2.547-12.178
                        c1.475-3.839,3.338-7.179,5.59-10.021c2.25-2.84,4.797-5.094,7.639-6.754s5.703-2.49,8.58-2.49c1.254,0,2.398,0.314,3.436,0.941
                        c1.029,0.627,1.916,1.438,2.654,2.436c0.736,0.996,1.348,2.086,1.826,3.267c0.48,1.182,0.83,2.289,1.055,3.319
                        c0.514-2.141,0.994-4.244,1.438-6.311c0.441-2.064,0.885-4.021,1.328-5.867c0.736-2.729,1.51-5.684,2.324-8.854
                        c0.734-2.729,1.586-5.867,2.547-9.41c0.957-3.543,2.025-7.271,3.211-11.183c0.734-0.592,1.438-1.032,2.102-1.33
                        c0.666-0.293,1.291-0.514,1.885-0.664c0.664-0.221,1.289-0.332,1.883-0.332c0.734,0,1.398,0.097,1.992,0.277
                        c0.588,0.187,1.086,0.664,1.492,1.439c0.404,0.772,0.684,1.938,0.83,3.485c0.146,1.552,0.146,3.652,0,6.312
                        c-0.146,3.25-0.719,6.793-1.715,10.629c-0.996,3.838-2.309,7.805-3.932,11.899c-1.625,4.097-3.486,8.191-5.59,12.287
                        C223.37,373.71,221.101,377.602,218.665,381.292z M212.132,382.73c0.297-1.397,0.57-2.805,0.83-4.207
                        c0.26-1.397,0.57-2.84,0.941-4.315c-0.148,0.071-0.275,0.147-0.387,0.223c-0.111,0.072-0.242,0.148-0.391,0.221
                        c-0.811,0.371-1.365,0.353-1.658-0.055c-0.299-0.404-0.441-1.053-0.441-1.938c0-0.443-0.039-1.234-0.111-2.384
                        c-0.076-1.143-0.275-2.321-0.607-3.541c-0.332-1.219-0.83-2.284-1.494-3.211c-0.664-0.924-1.59-1.385-2.77-1.385
                        c-1.697,0-3.432,0.869-5.201,2.604c-1.771,1.731-3.434,3.838-4.982,6.311c-1.551,2.475-2.844,5.111-3.875,7.916
                        c-1.035,2.805-1.625,5.312-1.771,7.527c-0.148,3.543,0.295,6.088,1.328,7.639c1.031,1.551,2.438,2.324,4.207,2.324
                        c1.328,0,2.783-0.517,4.373-1.549c1.584-1.033,3.135-2.287,4.648-3.767c1.512-1.477,2.914-2.987,4.207-4.539
                        C210.269,385.057,211.319,383.766,212.132,382.73z"/>
                    <path fill="#3A3A3A" d="M247.335,360.811c0.369-0.44,1.07-0.811,2.105-1.104c1.033-0.293,2.104-0.535,3.211-0.722
                        c1.105-0.184,2.121-0.293,3.043-0.332c0.924-0.036,1.459-0.018,1.605,0.058c0.072,0.071-0.109,0.848-0.555,2.324
                        c-0.441,1.479-0.996,3.211-1.66,5.202c-0.664,1.992-1.363,4.039-2.104,6.146c-0.74,2.104-1.293,3.818-1.662,5.146
                        c-0.369,1.328-0.811,2.824-1.328,4.484c-0.516,1.66-0.977,3.283-1.383,4.871s-0.684,3.082-0.83,4.481
                        c-0.146,1.402-0.037,2.476,0.332,3.212c0.369,0.887,0.773,1.493,1.217,1.825s0.922,0.498,1.439,0.498
                        c1.477,0,3.34-0.811,5.59-2.436c2.252-1.621,4.539-3.562,6.865-5.812c2.324-2.25,4.48-4.539,6.477-6.862
                        c1.992-2.324,3.469-4.188,4.43-5.593c0.59-0.733,1.197-1.217,1.824-1.438s1.146-0.182,1.551,0.111
                        c0.406,0.295,0.629,0.772,0.664,1.438c0.037,0.664-0.201,1.439-0.721,2.324c-1.18,2.067-2.914,4.521-5.203,7.363
                        c-2.287,2.842-4.723,5.571-7.307,8.19c-2.582,2.619-5.109,4.854-7.582,6.697s-4.484,2.805-6.035,2.879
                        c-1.254,0.072-2.49-0.129-3.707-0.609c-1.219-0.479-2.326-1.145-3.322-1.991c-0.996-0.849-1.824-1.845-2.488-2.988
                        c-0.664-1.145-1.033-2.342-1.107-3.601c-0.221-1.844-0.221-4.371,0-7.584c0.221-3.209,0.627-6.489,1.217-9.852
                        c0.594-3.359,1.35-6.549,2.271-9.576C245.104,364.538,246.155,362.29,247.335,360.811z M262.614,337.23
                        c-0.223,0.812-0.646,1.605-1.271,2.379c-0.629,0.775-1.328,1.402-2.105,1.886c-0.775,0.479-1.568,0.793-2.379,0.938
                        c-0.812,0.148-1.479,0-1.994-0.44c-1.549-1.183-2.361-2.453-2.436-3.82c-0.074-1.365,0.26-2.656,0.996-3.875
                        c0.736-1.217,1.66-2.25,2.768-3.101c1.107-0.848,2.068-1.346,2.879-1.493c0.812-0.148,1.494,0.018,2.049,0.498
                        c0.555,0.479,0.979,1.104,1.273,1.883c0.295,0.772,0.461,1.643,0.498,2.602C262.929,335.643,262.835,336.495,262.614,337.23z"/> 
                </svg>

                <h1>Noddi</h1>
            </div>

            <div class="field">

                <h2>
                    Mettre sa notoriété à profit <br />
                    n’a jamais été aussi simple.
                </h2>

                <div>
                    <div class="follow_us">Suivez-nous sur</div>

                    <ul class="socials">
                        <li><a target="_blank" title="Page Facebook" class="facebook" href="https://www.facebook.com/noddi.eu"></a></li>
                        <li><a target="_blank" title="Page Twitter" class="twitter" href="https://twitter.com/theNoddi"></a></li>
                        <li><a target="_blank" title="Page Instagram" class="instagram" href="https://instagram.com/thenoddi"></a></li>
                        <li><a title="Page Snapchat" class="snapchat" href="#"></a></li>
                        <li><a target="_blank" title="Page Pinterest" class="pinterest" href="https://fr.pinterest.com/noddi0434/"></a></li>
                    </ul>
                </div>

            </div>

        </header>

        <section class="wrapper">

            <form action="#">
                <p>Soyez informés avant tout le monde de l'ouverture de notre plateforme !</p>

                <input type="email" name="email" placeholder="Votre e-mail" />
                <div class="separator"></div>
                <button class="button">Je veux être informé !</button>
            </form>

        </section>

        <div class="flamingo">
            <img src="img/flamingo.gif" alt="GIF d'un flamand rose" width="100" />
        </div>

        <footer>
            <p>
                © Noddi 2015 -
            </p>
            <a href="cgu.pdf" target="_blank" class="cgu">Conditions Générales D'utilisation</a>
        </footer>

        <div class="popup_snapchat">
            <div class="close">X</div>
            <img src="img/qrcode.jpg" width="200" alt="QR Code pour nous suivre sur Snapchat" />
            <div>the-noddi</div>
        </div>

        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>

        <script src="js/main.js"></script>

        <!--    GOOGLE ANALYTICS    -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-64754298-1', 'auto');
            ga('send', 'pageview');
        </script>

    </body>

</html>
