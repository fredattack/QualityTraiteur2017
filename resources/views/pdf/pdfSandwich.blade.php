<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/front.css">
<style>

</style>

<a class="btn btn-danger" href="{{ route('pdfSandwich',['download'=>'pdf']) }}">Télécharger la liste</a>
<div class="container" id="pdfBody">

    <br/>
    {{--<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>--}}
    <hr>
    <div class="col-lg-12">
    <div class="col-lg-6">
    <h1>QualityTraiteur</h1>        {{--<img id="pdfLogo" src="image/QualityLogo.jpg">--}}
    </div>
    <div class="col-lg-6">

        <p>
            42 Avenue Reine Astrid
            4300 Waremme.
        </p>
        <p>
            Tel : 019/67.66.10
            Gsm : 0471/89.89.17
        </p>
    </div>
    </div>
    <br>
    <hr>
    <h2>Nos Sandwiches</h2>
    <table class='table table-condensed'>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th class="prixTitre" style="width: 10%">Prix 1/3</th>
            <th class="prixTitre" style="width: 10%">Prix 1/2</th>

        </tr>

        <?php

        $listFamille = $data['famille'];
        $lesComposants = $data['lesComposants'];
        $listProduit = $data['sandwiche'];
//            echo '<tr>';
//                echo '<td style="width: 30%"></td>' ;
//                echo '<td style="width: 50%"></td>' ;
//                echo '<td class="prixTitre" style="width: 10%;text-decoration: underline">prix 1/3</td>' ;
//                echo '<td class="prixTitre" style="width: 10%;text-decoration: underline ">prix 1/2</td>' ;
//                echo '</tr>';
//            echo '</table>';

        for ($i = 0; $i < count($listFamille); $i++) {
            echo "<h3 style='text-decoration: underline'>Les " .$listFamille[$i]->nom . " :</h3>";
            echo "<table class='table table-condensed col-lg-12'>";

            for ($cpt = 0; $cpt < count($listProduit); $cpt++) {
            if  ($listProduit[$cpt]->familleSandwiche_id === $listFamille[$i]->id) {
            echo "<tr>" ;
            echo    "<td style='width: 30%'><h4>" . $listProduit[$cpt]->nom . "</h4></td>" ;
            echo    "<td style='width: 50%'><h6>" . lesIngredients($lesComposants[$listProduit[$cpt]->id]) . " </h6></td>" ;
            echo    "<td class='tdPrix' style='width: 10%'><p>" . $listProduit[$cpt]->prixTiers . "€</p></td>" ;
            echo    "<td class='tdPrix' style='width: 10%'><p>" . $listProduit[$cpt]->prixDemi . "€</p></td>" ;
            echo    "</tr>";
            }
            }
            echo "</table>";
        }

        function lesIngredients($list) {
            $a=',';
            $b='.';
            $retVal = "";
            for ($i = 0; $i < count($list); $i++) {
                if ($i != count($list) - 1){
                    $retVal .= $list[$i]->nom ;
                    $retVal.= $a;
                    }
                else
                    $retVal .= $list[$i]->nom ;
        }           $retVal.= $b;
            return $retVal;
        }
        ?>
    </table>


</div>