<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boat</title>
    <link rel="stylesheet" href="style/style.css" />
</head>

<body>
    <svg width='80vim' height='80vim' viewbox="-110 -110 220 220" fill="none">
        <clipPath id="boatClipPath">
            <path d="m-100 8 q 20 10 40 0 t 40 0 40 0 40 0 40 0 40 0 40 0 v -100 h -280" />
        </clipPath>
        <g id="boat-clip" clipt-path="url(#boatClipPath)">
            <g id"boat">
                <path d="m-80 -20 h 160 l -40 60 h -80" fill="currentColor" />
                <path d="m-30 -25 l 30 -30 30 30" fill="currentcolor" />
                <animateTransform type="translate" attributeName="transform" keyTimes="0;0.5;1" values="0 0;0 8;0 0"
                    keySpines=".5,.0,.5,1;.5,.0,.5,1" dur="2s" repeatCount="indefinite" calcMode="spine"
                    additive="sum" />
                <animateTransform type="rotate" attributeName="transform" keyTimes="0;0.5;1" values="-4;4;-4"
                    keySpines=".5,.0,.5,1;.5,.0,.5,1" dur="6s" repeatCount="indefinite" calcMode="spine"
                    additive="sum" />
            </g>
        </g>
        <path d="m-100 20 q 20 10 40 0t 40 0 40 0 40 0 40 0" stroke="currentColor" stroke-width="5"
            stroke-dasharray="20 15 0 15" stroke-linecap="round">
        </path>
        <animate attributeName="stroke-dashoffset" to="50" dur="1s" repeatCount="indefinite" />
        <path d="m-100 40 q 20 10 40 0 t 40 0 40 0 40 0 40 0" stroke="currentColor" stroke-width="5"
            stroke-dasharray="20 15 0 15" stroke-linecap="round" stroke-dashoffset="25">
            <animate attributeName="stroke-dashoffset" to="-25" dur="1s" repeatCount="indefinite" />
        </path>
        <path d="m-100 60 q 20 10 40 0 t 40 0 40 0 40 0 40 0" stroke="currentColor" stroke-width="5"
            stroke-dasharray="20 15 0 15" stroke-linecap="round">
            <animate attributeName="stroke-dashoffset" to="50" dur="1s" repeatCount="indefinite" />
        </path>
    </svg>
</body>

</html>