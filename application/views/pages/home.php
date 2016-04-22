<div id="Home">
    <div id="foto">
        <img src="assets/img/plaatje.jpg">

         </div>

<p>Welcome bij DataDate!!

    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus tellus nulla, nec condimentum tortor tristique eget. Aliquam dapibus elit sed nulla convallis commodo. Mauris nec dapibus est. Etiam ipsum enim, imperdiet sit amet sapien vitae, mattis venenatis sem. Sed posuere felis non odio auctor, porttitor tempus ligula condimentum. Phasellus lectus sem, fringilla nec nunc quis, mollis viverra justo. Proin tincidunt ullamcorper urna, nec facilisis lectus faucibus ac. Donec turpis odio, feugiat at vestibulum at, blandit sit amet urna. Nullam rutrum venenatis purus, quis dapibus nulla bibendum in. Cras dignissim gravida dolor quis vulputate. Nunc maximus ut ipsum sit amet pharetra. Phasellus sed enim metus. Pellentesque id posuere leo. Nunc id sapien sit amet magna faucibus commodo.
</p>

<div id="previews">
    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht')->from('Persoon')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<img src="assets/img/man.jpg" height="100">'. "<br>" ;
            }
            else{

                echo '<img src="assets/img/vrouw.jpg" height="100">'. "<br>";
            }

            echo "Naam: ".$row->nickname ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht')->from('Persoon')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<img src="assets/img/man.jpg" width="100">'. "<br>" ;
            }
            else{

                echo '<img src="assets/img/vrouw.jpg" width="100">'. "<br>";
            }

            echo "Naam: ".$row->nickname ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht')->from('Persoon')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<img src="assets/img/man.jpg" width="100">'. "<br>" ;
            }
            else{

                echo '<img src="assets/img/vrouw.jpg" width="100">'. "<br>";
            }

            echo "Naam: ".$row->nickname ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht')->from('Persoon')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<img src="assets/img/man.jpg" width="100">'. "<br>" ;
            }
            else{

                echo '<img src="assets/img/vrouw.jpg" width="100">'. "<br>";
            }

            echo "Naam: ".$row->nickname ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
        echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>
    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht')->from('Persoon')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<img src="assets/img/man.jpg" width="100">'. "<br>" ;
            }
            else{

                echo '<img src="assets/img/vrouw.jpg" width="100">'. "<br>";
            }

            echo "Naam: ".$row->nickname ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>

    <div class="preview">
        <?php
        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('nickname, leeftijd, geslacht')->from('Persoon')
            ->group_start()
            ->where('id', $id )
            ->group_end()
            ->get();

        foreach ($query->result() as $row)
        {
            if ($row->geslacht == 'm') {
                echo '<div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div>'. "<br>" ;
            }
            else{
                
                echo '<div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div>'. "<br>";
            }

            echo "Naam: ".$row->nickname ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>
  

</div>

<a id="Meer" href="">Meer</a>

<!--<script>
    $(function() {
        $("#meer").click(function() {
            $("#previews").load("home.php")
        })
    })


</script>-->

</div>

