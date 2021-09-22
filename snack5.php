<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
     Prendere il paragrafo e suddividerlo in tanti paragrafi.
      Ogni punto un nuovo paragrafo. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph</title>
</head>
<body>



    <h3>Paragrafo per intero</h3>

    <?php
    
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut urna ac felis luctus finibus et quis dolor. Donec accumsan est non mauris tincidunt ornare. Integer sodales volutpat orci, vel egestas elit tincidunt vitae. Donec a justo id diam tincidunt laoreet. Donec placerat leo tincidunt commodo varius. Aliquam mattis massa lacus, eget vehicula felis laoreet sit amet. Cras vitae sollicitudin quam. Donec dignissim vitae nunc ac dapibus. Aenean consectetur tortor ut orci semper feugiat. Mauris scelerisque ipsum id justo maximus hendrerit. Donec interdum sollicitudin turpis, ac blandit lacus dictum non. Donec nibh lacus, feugiat nec justo nec, eleifend bibendum nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed ultricies magna. Duis efficitur nunc non lacus imperdiet lobortis.Etiam ullamcorper urna sed nibh ullamcorper, ut porttitor urna condimentum. Praesent at purus in magna luctus blandit. Integer varius metus posuere quam fermentum imperdiet. In laoreet eros nibh. Aenean et lacus a massa accumsan ultrices. Aenean elementum nisi ac purus ullamcorper, non feugiat arcu pulvinar. Fusce convallis erat a risus congue, id cursus elit vestibulum.Nam at nunc feugiat, porta sem vel, sollicitudin eros. Ut aliquet lorem in lectus vehicula molestie. In sit amet nisi vulputate, fermentum mi non, egestas ex. Donec non nisl justo. In ante lectus, suscipit interdum imperdiet vitae, elementum nec nisl. Donec dapibus leo et ullamcorper tincidunt. Phasellus gravida nec quam in ultrices. Morbi a aliquet ante.";
    echo $paragraph;

    ?>

    <h3>Divisione in paragrafi</h3>

    <?php

    $NewParagraph = str_replace('.', '.</p><p>', $paragraph);
    echo "</p>{$NewParagraph}<p>"

    ?>


</body>
</html>      




