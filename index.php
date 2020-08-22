<?php
include 'header.php';
?>

<head>
    <style>
        .main{
            margin-left: 100px;
            margin-top: 100px;
            margin-right: 100px;
        }

        .table1{
            background: #eee; 
            border: 2px solid #044284;
            margin:0;
            width: 550px;
            height: auto;
        }
        input{
            height: 45px;
            border: 2px solid #044284;
        }


    </style>
    
    <title>calculate-exponential</title>
    
</head>

<div class="main">
    <form method="post" action="islem.php">
        <table class="table1" border="0">
            <tr style="height:30px">
                <td style="width:40px"></td>        
                <td></td>
                <td></td>        
                <td></td>
                <td></td>        
                <td></td>   
                <td style="width:40px"></td>

            </tr>
            <tr id="1"> 
                <td style="width:40px"></td>        
                <td></td>
                <td></td>
                <td>
                    <input type="text" name="exponent" required value="<?php 
                                                                       if(@$_GET['exponent']){
                                                                           echo $_GET['exponent'];
                                                                       }
                                                                       if(@$_GET['exponent']){

                                                                       }
                                                                       ?> 
                                                                       " style="text-align:left; width:100px; margin:0px">
                </td>
                <td></td>
                <td></td>
                <td style="width:40px"></td>
            </tr>
            <tr id="2" style="background:#eee">
                <td style="width:40px"></td>        
                <td></td>
                <td style="padding:0px">
                    <b style="font-size:33px;">^</b>   
                </td><td>

                </td>
                <td style="padding:0px">
                    <b style="font-size:33px">&nbsp;=&nbsp;</b>
                </td>
                <td>
                    <input type="text" name="fresult" value="<?php 
                                                             if(@$_GET['fresult']){
                                                                 echo $_GET['fresult'];
                                                             }
                                                             if(@$_GET['fresult']){

                                                             }
                                                             ?> 
                                                             "
                           style="text-align: left;  margin:0px">
                </td>
                <td style="width:40px"></td>

            </tr>
            <tr id="3">
                <td style="width:40px"></td>        
                <td>
                    <input type="text" required name="base" id="base"  value="<?php 
                                                                              if(@$_GET['base']){
                                                                                  echo $_GET['base'];
                                                                              }
                                                                              if(@$_GET['base']){

                                                                              }
                                                                              ?> 
                                                                              " style="text-align: right; width:120px;margin:0px">
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="width:40px"></td>
            </tr>
            <tr id="4" style="height:30px">
                <td style="width:40px"></td>        
                <td></td>        
                <td></td>
                <td></td>        
                <td></td>
                <td></td>              
                <td style="width:40px"></td>

            </tr>
            <tr id="5">

                <td colspan="7">
                    <input type="submit" class="btn btn-success btn-lg btn-block" value="Calculate">
            </tr>
        </table>
    </form>
    <p>
        <br>
        <h3>History of the Notation</h3>
        The term power was used by the Greek mathematician Euclid for the square of a line, following Hippocrates of Chios. Archimedes discovered and proved the law of exponents, 10a ⋅ 10b = 10a+b, necessary to manipulate powers of 10. In the 9th century, the Persian mathematician Muhammad ibn Mūsā al-Khwārizmī used the terms mal for a square and kahb for a cube, which later Islamic mathematicians represented in mathematical notation as m and k, respectively, by the 15th century, as seen in the work of Abū al-Hasan ibn Alī al-Qalasādī.

        In the late 16th century, Jost Bürgi used Roman numerals for exponents.

        Early in the 17th century, the first form of our modern exponential notation was introduced by Rene Descartes in his text titled La Géométrie; there, the notation is introduced in Book I.

        Nicolas Chuquet used a form of exponential notation in the 15th century, which was later used by Henricus Grammateus and Michael Stifel in the 16th century. The word "exponent" was coined in 1544 by Michael Stifel. Samuel Jeake introduced the term indices in 1696. In the 16th century Robert Recorde used the terms square, cube, zenzizenzic (fourth power), sursolid (fifth), zenzicube (sixth), second sursolid (seventh), and zenzizenzizenzic (eighth). Biquadrate has been used to refer to the fourth power as well.

        Some mathematicians (e.g., Isaac Newton) used exponents only for powers greater than two, preferring to represent squares as repeated multiplication. Thus they would write polynomials, for example, as ax + bxx + cx3 + d.

        Another historical synonym, involution, is now rare and should not be confused with its more common meaning.

        In 1748 Leonhard Euler wrote "consider exponentials or powers in which the exponent itself is a variable. It is clear that quantities of this kind are not algebraic functions, since in those the exponents must be constant."[10] With this introduction of transcendental functions, Euler laid the foundation for the modern introduction of natural logarithm as the inverse function for the natural exponential function, f(x) = ex.
    </p>
</div>