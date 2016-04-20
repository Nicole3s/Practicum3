<div id="Home">
    <div id="foto">
        <img src="assets/img/plaatje.jpg">

         </div>

<p>Welcome bij DataDate!!

    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus tellus nulla, nec condimentum tortor tristique eget. Aliquam dapibus elit sed nulla convallis commodo. Mauris nec dapibus est. Etiam ipsum enim, imperdiet sit amet sapien vitae, mattis venenatis sem. Sed posuere felis non odio auctor, porttitor tempus ligula condimentum. Phasellus lectus sem, fringilla nec nunc quis, mollis viverra justo. Proin tincidunt ullamcorper urna, nec facilisis lectus faucibus ac. Donec turpis odio, feugiat at vestibulum at, blandit sit amet urna. Nullam rutrum venenatis purus, quis dapibus nulla bibendum in. Cras dignissim gravida dolor quis vulputate. Nunc maximus ut ipsum sit amet pharetra. Phasellus sed enim metus. Pellentesque id posuere leo. Nunc id sapien sit amet magna faucibus commodo.

    Nam eleifend elementum semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla gravida mi id nisl maximus pharetra. Fusce vulputate vitae erat eu consectetur. Suspendisse porttitor facilisis nulla. Phasellus lorem mi, lobortis quis mollis a, aliquam ac dolor. Aenean semper turpis id tincidunt luctus. Nunc gravida, massa vel pharetra bibendum, ex arcu sagittis ex, vitae tempus nibh felis nec nisl. Etiam imperdiet felis odio, in volutpat eros lacinia sed. Quisque ut tincidunt risus. Donec dui nunc, elementum eget tortor eu, molestie rutrum ligula. Morbi porttitor pretium pellentesque. Quisque iaculis tellus non libero ornare, vel tincidunt augue varius. Cras sollicitudin purus ac congue faucibus. Pellentesque consequat velit tellus, et ultricies magna efficitur ac. Quisque imperdiet diam quis ex sodales, vel rhoncus augue mollis.

    Sed vitae augue iaculis, interdum nunc id, ultrices erat. Suspendisse nunc ligula, fringilla sit amet porttitor at, molestie luctus lectus. Sed vel velit id elit tincidunt eleifend in ac tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod ac erat eget consequat. Vestibulum eu ultricies erat. Fusce vitae lacus porta, ultrices tellus eget, porttitor ipsum. Aenean placerat, massa et lobortis consequat, ligula diam pharetra nisl, at dignissim dui lectus id arcu. Aliquam sodales enim elit, at pharetra magna rutrum vel. Sed luctus ut massa et accumsan. Donec lacus erat, suscipit et odio eget, gravida vestibulum dui. In iaculis accumsan erat, ac interdum mi. Nam at malesuada diam, id venenatis lorem. Fusce fermentum congue gravida.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempus tellus nulla, nec condimentum tortor tristique eget. Aliquam dapibus elit sed nulla convallis commodo. Mauris nec dapibus est. Etiam ipsum enim, imperdiet sit amet sapien vitae, mattis venenatis sem. Sed posuere felis non odio auctor, porttitor tempus ligula condimentum. Phasellus lectus sem, fringilla nec nunc quis, mollis viverra justo. Proin tincidunt ullamcorper urna, nec facilisis lectus faucibus ac. Donec turpis odio, feugiat at vestibulum at, blandit sit amet urna. Nullam rutrum venenatis purus, quis dapibus nulla bibendum in. Cras dignissim gravida dolor quis vulputate. Nunc maximus ut ipsum sit amet pharetra. Phasellus sed enim metus. Pellentesque id posuere leo. Nunc id sapien sit amet magna faucibus commodo.


    </p>

<div id="previews">
    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('naam, leeftijd, geslacht')->from('Persoon')
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

            echo "Naam: ".$row->naam ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('naam, leeftijd, geslacht')->from('Persoon')
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

            echo "Naam: ".$row->naam ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('naam, leeftijd, geslacht')->from('Persoon')
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

            echo "Naam: ".$row->naam ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>

    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('naam, leeftijd, geslacht')->from('Persoon')
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

            echo "Naam: ".$row->naam ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
        echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>
    <div class="preview">
        <?php

        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('naam, leeftijd, geslacht')->from('Persoon')
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

            echo "Naam: ".$row->naam ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>

    <div class="preview">
        <?php
        $max = $this->db->count_all_results('Persoon');
        $id = rand (1, $max);
        $query = $this->db->select('naam, leeftijd, geslacht')->from('Persoon')
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

            echo "Naam: ".$row->naam ."<br>";
            echo "Leeftijd: ".$row->leeftijd."<br>";
            echo "Geslacht: ".$row->geslacht . "<br>";

        }

        ?>

    </div>
  

</div>

<p>Meer</p>


</div>

