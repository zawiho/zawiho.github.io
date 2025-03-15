    </main>
    <div class="socials">
        <a href="https://github.com/zawiho" target="_blank">
            <img src="images/git.png" width="25">
        </a>
        <a href="https://www.linkedin.com/in/zachary-howell-she-her/" target="_blank">
            <img src="images/linked.png" width="25">
        </a>
    </div>

    <p id="zackToTop">Back to Top</p>
    <div class="footer-img">
        <a href="#">
            <img id="monogram" src=images/logo.png alt="Zachary Howell logo" width="80">
        </a>
    </div>
    <footer>
        <small>Copyright &copy; <?php echo date("Y");?>, Zachary Howell. All Rights Reserved.</small>
    </footer>   

    <script src="nav.js"></script>
    <script src="foot.js"></script>
    <?php 
        if($pagetype=="project"){
            echo'<script src="sidescroll.js"></script>';
        }
    ?>
</body>
</html>