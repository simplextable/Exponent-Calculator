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
        Lorem Ipsum Nedir?
        Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.

        Neden Kullanırız?
        Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.
    </p>
</div>