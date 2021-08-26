<div class="content-wrapper">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <div class="card card-primary">
        <div class="card-header">
          <h4 class="card-title">
            <h1 class="m-0"><span class="badge badge-light">Kullanıcılar</h1></span></h1>
          </h4>
        </div>
        <div class="card-body">
          <form action="" , method="POST">
            <br>
            <?php
            $sql = "select * from odf";
            $result = mysqli_query($con, $sql);
            ?>
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Adı</th>
                  <th scope="col">Tarih</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                  <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['soru1']; ?></td>
                    <td><?php echo $row['soru2']; ?></td>
                    <td><button class="btn btn-primary" onclick="location.href='./main.php?sayfaadi=sonuc4&SonucID=<?php echo $row['ID']; ?>'" type="button">
                        Göster</button>

                    </td>
                  </tr>


                <?php
                }

                ?>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>