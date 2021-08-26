<?php
if (isset($_SESSION['YetkiNo'])) {
	$query = "select * from menu where YetkiNo = {$_SESSION['YetkiNo']} and MenuAktif=1 and MenuBaslik not like 'Anket%'";
	$result = mysqli_query($con, $query);
	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			while ($user_data = mysqli_fetch_array($result)) {
?>
				<li class="nav-item">
					<a href="<?php echo 'main.php?sayfaadi=' . $user_data['MenuURL']; ?>" class="nav-link">
						<p><?php echo $user_data['MenuBaslik'] ?></p>
					</a>
				<li>
		<?php
			}
		}
	}
		?>


		<?php
		$query = "select * from menu where YetkiNo = {$_SESSION['YetkiNo']} and MenuAktif=1 and MenuBaslik like 'Anket-%' order by MenuBaslik asc";
		$result = mysqli_query($con, $query);
		if (mysqli_num_rows($result) > 0) {
		?>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Anketler
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<?php

						while ($user_data = mysqli_fetch_array($result)) {
						?>
							<li class="nav-item">
								<a href="<?php echo 'main.php?sayfaadi=' . $user_data['MenuURL'] ?>" class="nav-link">
									<p><?php echo $user_data['MenuBaslik'] ?></p>
								</a>
							<li>
							<?php
						}
							?>
					</ul>
				</li>
			<?php
		}
			?>
			<?php


			$query = "select * from menu where YetkiNo = {$_SESSION['YetkiNo']} and MenuAktif=1 and MenuBaslik like 'Anket Sonuç%' order by MenuBaslik asc";
			$result = mysqli_query($con, $query);
			if ($result) {
				if (mysqli_num_rows($result) > 0) {
			?>
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-edit"></i>
							<p>
								Anket Sonuclari
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<?php

							while ($user_data = mysqli_fetch_array($result)) {
							?>
								<li class="nav-item">
									<a href="<?php echo 'main.php?sayfaadi=' . $user_data['MenuURL'] ?>" class="nav-link">
										<p><?php echo $user_data['MenuBaslik'] ?></p>
									</a>
								<li>
								<?php
							}
								?>
						</ul>
					</li>
		<?php
				}
			}
		} else
			echo "Session bulunamadı";
		?>