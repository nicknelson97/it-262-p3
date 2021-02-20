<footer>
        <ul>
            <li>&copy; <?php $startDate = 2019; $currentDate = date('Y');
                if($startDate == $currentDate) {
                    echo $currentDate;
                } else {
                    echo ''.$startDate.' - '.$currentDate.'';
                } // else
                ?></li>
            <li>All Rights Reserved</li>
            <li><a href="https://www.linkedin.com/in/lcared/">Sharon Alexander</a></li>
            <li><a href="https://github.com/nicknelson97">Dominick Nelson</a></li>
        </ul>
    </footer> <!--end wrapper-->
</body>
</html>