<?php
require('../Views/layouts/app.php');
?>
<head>
    <title>郵便番号API</title>
</head>    
    <div class="flex">        
    <form action="" method="">
        <table class="table table-hover">
            <h1  class="text-center" colspan="2">郵便番号検索のAPI</h1>
                 <tr>
                    <th>郵便番号</th>
                    <td><?php echo $number3 ?>-<?php echo $number4?></td>              
                </tr>
                <tr>
                    <th>町名セレクトボックス</th>
                    <td>                                        
                        <select name="example">
                              <option hidden>町名を選択してください</option>
                            <?php for ($i=0; $i<=$count ; $i++) { ?>    
                        <option><?php echo h($response ['results'] [$i] ['address3']);?></option>
                        <?php } ?>  
                        </select>            
                    </td>
                </tr>

                <?php for ($i=0; $i<=$count ; $i++) { ?>
                <tr>
                <th>住所:<?php echo $i+1 ?></th>
               <td> <?php echo h($response ['results'] [$i] ['address1']  . $response ['results'] [$i] ['address2']  . $response ['results'] [$i] ['address3']); ?></td> 
               </tr>  
                <tr>
                <th>カナ住所:<?php echo $i+1 ?></th>
               <td> <?php echo h($response ['results'] [$i] ['kana1']  . $response ['results'] [$i] ['kana2'] . $response ['results'] [$i] ['kana3']); ?></td> 
               </tr>  
                <?php } ?>                             
            <tr class="text-center">
                <td colspan="2"><a href="post_number.php" class="btn btn-secondary ">戻る</a></td>              
            </tr>
        </table>   
    </form>
    </div>
</body>
</html>