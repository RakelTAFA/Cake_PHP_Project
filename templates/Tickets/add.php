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

                    <div class="form-group">
                        <?= $this->Form->create()?>
                        <?= $this->Form->label('Titre du ticket',null, [
                            'class' => 'col-sm-2 col-sm-2 control-label',
                            'for' => 'inputTitle'
                        ]) ?>
                        <div class="col-sm-10">
                            <?= $this->Form->input('title', [
                                'id' => 'inputTitle',
                                'class' => 'form-control'
                            ]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= $this->Form->label('description', null,[
                            'class' => 'col-sm-2 col-form-label',
                            'for' => 'inputContent'
                        ]) ?>
                        <div class="col-sm-10">
                            <?= $this->Form->textarea('description', [
                                'id' => 'inputContent',
                                'class' => 'form-control'
                            ]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->label('level', null,[
                            'class' => 'col-sm-2 col-form-label',
                            'for' => 'inputSelect'
                        ]) ?>
                        <div class="col-sm-10">
                            <?= $this->Form->select('level', [
                                '0' => '0',
                                '1' => '1',
                                '2' => '2',
                                '3' => '3',
                                '4' => '4',
                                '5' => '5',
                                '6' => '6',
                                '7' => '7',
                                '8' => '8',
                                '9' => '9',
                                '10' => '10'
                            ], [
                                'id' => 'inputSelect',
                                'class' => 'form-control'
                            ]) ?>
                        </div>
                    </div>
                    <div class='pull-right'>
                    <?=($this->Form->button('Enregistrer', ['type' => 'submit', 'class' => 'btn btn-primary']));?>
                    </div>
                    <?=$this->Form->end();?>
                </div>
              </div>
            </section>
          </div>
        </div>

      </section>
    </section>
