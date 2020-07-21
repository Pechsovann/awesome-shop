<style>
 .box {
        width: 95%;
        height: 400px;
        padding: 20px;
        margin: 50px auto;
        border: 10px slategray;
        background-size: cover;
        text-align: center;
        /* margin-bottom: 50px; */
    }
    .container-1 {
        top: 50%;
        margin-left: 57px;
        margin-top: 57px;
        color: #080808;
        border-radius: 10px;
    }
    .boxContainer {
        margin: auto;
        margin-top: 5%;
        position: relative;
        width: 400px;
        height: 42px;
        border: 5px solid #2980b9;
        padding: 0px 2px;
        border-radius: 50px;
    }
    .elementsContainer {
        width: 100%;
        height: 100%;
        vertical-align: middle;
    }
    .search {
        border: none;
        height: 100%;
        width: 100%;
        padding: 0px;
        border-radius: 50px;
        font-size: 18px;
        font-family: "Nunito";
        color: #424242;
        font-weight: 500;
    }
    .search:focus {
        outline: none;
    }
</style>
<?php
        $features = query ('select * FROM features order by rand() limit 1;');
        $feat = $features -> fetch_array(MYSQLI_NUM);
    ?>
        <div class=" jumbotron text-center bg-feature" style="background: url(<?php echo $feat[3]; ?>)">
            <h1 class="text-success font-weight-bold" id="myDIV"><?php echo $feat[1];?></h1>
            <h3 class="text-info"><?php echo $feat[2]; ?> </h3>
            
            <div class="boxContainer">
            
            <table class="elementsContainer">
              <tr>
                <td>
                  <input type="search" id="search" placeholder=" &nbsp;Search your products from here" class="search">
                </td>
                <td>
                  <a href="#"><i class="fa fa-search" aria-hidden="true"></i></i></a>
                </td>
              </tr>
            </table>
          </div>
      </div>  
       
        </div>
    
        

