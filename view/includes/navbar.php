<div class="nav">
    <div class="company">
        <h2 style="color: white">Admin Dashboard</h2>
    </div>
    <div class="profile">
        <div class="image">
            <a href="#"><img src="../../../public/images/profile.png" alt="" /></a>
        </div>
        <div class="profile-name"><?php echo $_SESSION['user']; ?></div>
        <div>
            <form action="../../logout.php">
                <input type="submit" class="btn-log" name="" id="" value="Logout">
               
            </form>
        </div>
    </div>
</div>