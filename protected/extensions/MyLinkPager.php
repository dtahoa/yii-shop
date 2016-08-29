<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 5/6/14
 * Time: 10:41 PM
 * To change this template use File | Settings | File Templates.
 */
class MyLinkPager extends CLinkPager
{
    /**
     * Initializes the pager by setting some default property values.
     */
    public function init()
    {
        if ($this->nextPageLabel === null)
            $this->nextPageLabel = Yii::t('yii', 'Next »');
        if ($this->prevPageLabel === null)
            $this->prevPageLabel = Yii::t('yii', '« Previous');
        if ($this->header === null)
            $this->header = Yii::t('yii', 'Go to page: ');
        if (!isset($this->htmlOptions['id']))
            $this->htmlOptions['id'] = $this->getId();
        if (!isset($this->htmlOptions['class']))
            $this->htmlOptions['class'] = 'yiiPager';
        $this->previousPageCssClass = 'nextprev';
        $this->nextPageCssClass = 'nextprev';
    }

    protected function createPageButtons()
    {
        if (($pageCount = $this->getPageCount()) <= 1)
            return array();

        list($beginPage, $endPage) = $this->getPageRange();
        $currentPage = $this->getCurrentPage(false); // currentPage is calculated in getPageRange()
        $buttons = array();

        // next page
        if (($page = $currentPage + 1) >= $pageCount - 1)
            $page = $pageCount - 1;
        $buttons[] = $this->createPageButton($this->nextPageLabel, $page, $this->nextPageCssClass, $currentPage >= $pageCount - 1, false);

        // internal pages
        for ($i = $endPage; $i >= $beginPage; --$i)
            $buttons[] = $this->createPageButton($i + 1, $i, $this->internalPageCssClass, false, $i == $currentPage);

        // prev page
        if (($page = $currentPage - 1) < 0)
            $page = 0;
        $buttons[] = $this->createPageButton($this->prevPageLabel, $page, $this->previousPageCssClass, $currentPage <= 0, false);

        return $buttons;
    }

    /**
     * Creates a page button.
     * You may override this method to customize the page buttons.
     * @param string $label the text label for the button
     * @param integer $page the page number
     * @param string $class the CSS class for the page button.
     * @param boolean $hidden whether this page button is visible
     * @param boolean $selected whether this page button is selected
     * @return string the generated button
     */
    protected function createPageButton($label, $page, $class, $hidden, $selected)
    {
        if ($hidden)
            return '<span class="nextprev">'.$label.'</span>';
        if ($selected)
            return '<span class="current">'.$label.'</span>';
        return CHtml::link($label, $this->createPageUrl($page), array('class'=>$class));
    }
}