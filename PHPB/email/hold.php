
    if (!empty($areasOfStudy) || !empty($studied_other)) { ?>

    <!-- area of study -->
    <table>
      <thead>
        <tr>
          <td><?php echo $studied_other; ?></td>
        </tr>
        <tr>
          <th>Area of Study</th>
          <?php if (!empty($studied_other)) { ?>
          <th>Other</th>
          <?php } ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          foreach ($areaOfStudy as $key) {
            if (!empty($key)) { ?>
            <td><?php echo $key; ?></td>
          <?php  }
          }
          if (!empty($studied_other)) { ?>
            <td><?php echo $studied_other; ?></td>
          <?php } ?>
        </tr>
      </tbody>
    </table>


<?php } ?>
