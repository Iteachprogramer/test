<?php


namespace soft\widget\adminlte3;


use yii\base\Widget;

/**
 * Class ECard
 *  'mainLabel' => "Salom",
 * 'subLabel' => "Alik",
 * 'subLabelClass' => "text-muted m-b-0",
 * 'mainLabelClass' => "text-c-yellow f-w-600",
 * 'rightIconClass' => 'feather icon-bar-chart f-28',
 * 'footerRightIconClass' => 'feather icon-trending-up text-white f-16',
 * 'bgFooter' => 'bg-c-yellow'
 * @package soft\adminty\widgets
 */
class ECard extends Widget
{
    public $mainLabel = "Salom";
    public $subLabel = "Alik";
    public $subLabelClass = "text-muted m-b-0";
    public $mainLabelClass = "text-c-yellow f-w-600";
    public $rightIconClass = 'feather icon-bar-chart f-28';
    public $footerRightIconClass = 'feather icon-trending-up text-white f-16';
    public $bgFooter = 'bg-c-yellow';
    public $footerLink = '<a href = "#" class = "text-white m-b-0">% change</a>';


    /**
     * Executes the widget.
     * @return string the result of widget execution to be outputted.
     */
    public function run()
    {
        return '    <div class = "card">
<div class = "card-block">
<div class = "row align-items-center">
<div class = "col-8">
<h4 class = "' . $this->mainLabelClass . '">' . $this->mainLabel . '</h4>
<h6 class = "' . $this->subLabelClass . '">' . $this->subLabel . '</h6>
</div>
<div class = "col-4 text-right">
<i class = "' . $this->rightIconClass . '"></i>
</div>
</div>
</div>
<div class = "card-footer ' . $this->bgFooter . '">
<div class = "row align-items-center">
<div class = "col-9">
' . $this->footerLink . '
</div>
<div class = "col-3 text-right">
<i class = "' . $this->footerRightIconClass . '"></i>
</div>
</div>

</div>
</div>';
    }
}