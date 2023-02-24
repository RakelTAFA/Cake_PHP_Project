<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tickets list</h3>
        <div class="row mt">
          <div class="col-md-12">
            <section class="task-panel tasks-widget">
              <div class="panel-heading">
                <div class="pull-left">
                  <h5><i class="fa fa-tasks"></i> Ajouter un ticket</h5>
                </div>
                <br>
              </div>
              <div class="panel-body">
                <div class="task-content">

                    <?php
                    /** @var Form $form */
                    use Cake\Form\Form;

                    echo($this->Form->create($ticket, [
                        'class' => 'form-horizontal style-form'
                    ]));

                    // Title
                    echo("<div class='form-group'>");
                    echo($this->Form->control('title',
                        ['class' => 'col-sm-2 col-sm-2 control-label',
                            'label' => 'Titre du ticket']));
                    echo("<div class='col-sm-10'>");
                    //echo($this->Form->control('inputTitle', ['type' => 'text',
                    //    'required' => 'true']));
                    echo("</div>");
                    echo("</div>");

                    // Description
                    echo("<div class='form-group'>");
                    echo($this->Form->control('description',
                        ['class' => 'col-sm-2 col-sm-2 control-label',
                            'label' => 'Description complète du ticket']));
                    echo("<div class='col-sm-10'>");
                    //echo($this->Form->control('inputContent', ['type' => 'textarea',
                    //    'required' => 'true']));
                    echo("</div>");
                    echo("</div>");

                    // Urgency
                    echo("<div class='form-group'>");
                    echo($this->Form->control('level',
                        ['class' => 'col-sm-2 col-sm-2 control-label',
                            'label' => "Niveau d'urgence"]));
                    /*
                    echo("<div class='col-sm-10'>");
                    echo("<select id='inputSelect' class='form-control' name='level'>");
                    echo("<option value='0'>0</option>");
                    echo("<option value='1'>1</option>");
                    echo("<option value='2'>2</option>");
                    echo("<option value='3'>3</option>");
                    echo("<option value='4'>4</option>");
                    echo("<option value='5'>5</option>");
                    echo("<option value='6'>6</option>");
                    echo("<option value='7'>7</option>");
                    echo("<option value='8'>8</option>");
                    echo("<option value='9'>9</option>");
                    echo("<option value='10'>10</option>");
                    echo("</select>");
                    echo("</div>");
                    echo("</div>");
                    */

                    // Button
                    echo("<div class='pull-right'>");
                    echo($this->Form->button('Enregistrer', ['type' => 'submit', 'class' => 'btn btn-primary']));
                    echo("</div>");

                    echo($this->Form->end());
                    ?>
                </div>
              </div>
            </section>
          </div>
        </div>

      </section>
    </section>
    <!--main content end-->

      <?= $this->element("front/footer");?>


  </section>

</body>

</html>
