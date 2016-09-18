<div class="container">
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        <?php
                        $startYear = 2006;
                        $thisYear = date('Y');
                        if ($startYear == $thisYear) {
                         echo $startYear;
                        } else {
                         echo "Copyright - {$startYear}&ndash;{$thisYear}";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </footer>
    </div>