<?php
namespace Mtools\MediaManager\Block\Adminhtml;

class MediaManager extends \Magento\Framework\View\Element\Template
{
    /**
     * @return mixed
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getMediaButton()
    {
        $mediaUrl = $this->getUrl('cms/wysiwyg_images/index', ['type' => 'file']);

        $mediaBlock = $this->getLayout()
            ->createBlock(\Magento\Backend\Block\Widget\Button::class)
            ->setType('button')
            ->setClass('btn-mediamanager')
            ->setLabel('Manage Media')
            ->setOnClick('MediabrowserUtility.openDialog(\'' . $mediaUrl . '\')');

        return $mediaBlock->toHtml();
    }
}
