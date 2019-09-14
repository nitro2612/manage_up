<?php include_once "../../util/module/head.php"; ?>
<body>
    <div class="test"></div>
</body>
<style>

    .test {width:50px; height: 50px; background: #0F9E5E;}
    .test::before
    {
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: '\f007';
    }

</style>
