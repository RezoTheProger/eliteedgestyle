<?php
include_once("header.php");

?>
    
    <section class="profile">
        <div class="bg"></div>
        <div class="profileWrapper">
        <div class="account-info">
            <h1>Account Management</h1>
            <div class="link-manager">
                <a href="">Account</a>
                <a href="">Password Change</a>
            </div>
            <button class="log-out">Log Out</button>
        </div>
        <div class="profile-nav-bar">
            <div class="account-section">
                <h1>User Profile:</h1>
                <div class="save-changer">
                    <div class="changer"> 
                        <h3>Change Username:</h3>
                        <input type="text" placeholder="Username">
                    </div>
                    <button class="save">Save</button>
                </div>
                <div class="save-changer">
                    <div class="changer"> 
                        <h3>Change Email‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ :</h3>
                        <input type="email" placeholder="email">
                    </div>
                    <button class="save">Save</button>
                </div>
                <div class="save-changer">
                    <div class="changer"> 
                        <h3>Change Username:</h3>
                        <textarea type="text" placeholder="Bio" wrap="hard" maxlength="150"></textarea>
                    </div>
                    <button class="save">Save</button>
                </div>
                <div class="save-changer">
                    <div class="changer"> 
                        <h3>Change Profile Picture:</h3>
                        <div class="img-changer">
                         <input type="file" class="img-input">
                        </div>
                    </div>
                    <button class="save">Save</button>
                </div>
            </div>
        </div>
            
</div>
    </section>



</body>
<script src="index.js"></script>

</html>