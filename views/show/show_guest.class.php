<?php

class ShowGuest {

    public function display($guests) {
        ?>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Birth Date</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($guests as $guest): ?>
                <tr>
                    <td><?php echo $guest->getName(); ?></td>
                    <td><?php echo $guest->getBirthDate(); ?></td>
                    <td><?php echo $guest->getEmail(); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php
    }

}
