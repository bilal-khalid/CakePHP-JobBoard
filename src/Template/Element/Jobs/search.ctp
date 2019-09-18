<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="p-3 p-md-5 mt-4 text-dark rounded bg-light">
    <?= $this->Form->create(null, ['url' => ['controller' => 'Jobs', 'action' => 'browse']]); ?>
        <div class="form-row align-items-center">
            <div class="col-lg-4 my-1">
                <?= $this->Form->text(
                    'keywords', 
                    [
                        'class' => 'form-control',
                        'default' => $this->request->getData('keywords'),
                        'placeholder' => 'Enter Keywords...'
                    ]
                ) ?>
            </div>
            <div class="col-lg-3 my-1">
                <?= $this->Form->select(
                    'state', 
                    [
                        ['value' => 'AL', 'text' => 'Alabama'], 
                        ['value' => 'AK', 'text' => 'Alaska'], 
                        ['value' => 'AZ', 'text' => 'Arizona'], 
                        ['value' => 'AR', 'text' => 'Arkansas'], 
                        ['value' => 'CA', 'text' => 'California'], 
                        ['value' => 'CO', 'text' => 'Colorado'], 
                        ['value' => 'CT', 'text' => 'Connecticut'], 
                        ['value' => 'DE', 'text' => 'Delaware'], 
                        ['value' => 'FL', 'text' => 'Florida'], 
                        ['value' => 'GA', 'text' => 'Georgia'], 
                        ['value' => 'HI', 'text' => 'Hawaii'], 
                        ['value' => 'ID', 'text' => 'Idaho'], 
                        ['value' => 'IL', 'text' => 'Illinois'], 
                        ['value' => 'IN', 'text' => 'Indiana'], 
                        ['value' => 'IA', 'text' => 'Iowa'], 
                        ['value' => 'KS', 'text' => 'Kansas'], 
                        ['value' => 'KY', 'text' => 'Kentucky'], 
                        ['value' => 'LA', 'text' => 'Louisiana'], 
                        ['value' => 'ME', 'text' => 'Maine'], 
                        ['value' => 'MD', 'text' => 'Maryland'], 
                        ['value' => 'MA', 'text' => 'Massachusetts'], 
                        ['value' => 'MI', 'text' => 'Michigan'], 
                        ['value' => 'MN', 'text' => 'Minnesota'], 
                        ['value' => 'MS', 'text' => 'Mississippi'], 
                        ['value' => 'MO', 'text' => 'Missouri'], 
                        ['value' => 'MT', 'text' => 'Montana'], 
                        ['value' => 'NE', 'text' => 'Nebraska'], 
                        ['value' => 'NV', 'text' => 'Nevada'], 
                        ['value' => 'NH', 'text' => 'New Hampshire'], 
                        ['value' => 'NJ', 'text' => 'New Jersey'], 
                        ['value' => 'NM', 'text' => 'New Mexico'], 
                        ['value' => 'NY', 'text' => 'New York'], 
                        ['value' => 'NC', 'text' => 'North Carolina'], 
                        ['value' => 'ND', 'text' => 'North Dakota'], 
                        ['value' => 'OH', 'text' => 'Ohio'], 
                        ['value' => 'OK', 'text' => 'Oklahoma'], 
                        ['value' => 'OR', 'text' => 'Oregon'], 
                        ['value' => 'PA', 'text' => 'Pennsylvania'], 
                        ['value' => 'RI', 'text' => 'Rhode Island'], 
                        ['value' => 'SC', 'text' => 'South Carolina'], 
                        ['value' => 'SD', 'text' => 'South Dakota'], 
                        ['value' => 'TN', 'text' => 'Tennessee'], 
                        ['value' => 'TX', 'text' => 'Texas'], 
                        ['value' => 'UT', 'text' => 'Utah'], 
                        ['value' => 'VT', 'text' => 'Vermont'], 
                        ['value' => 'VA', 'text' => 'Virginia'], 
                        ['value' => 'WA', 'text' => 'Washington'], 
                        ['value' => 'WV', 'text' => 'West Virginia'], 
                        ['value' => 'WI', 'text' => 'Wisconsin'], 
                        ['value' => 'WY', 'text' => 'Wyoming']
                    ], 
                    [
                        'class' => 'form-control',
                        'default' => $this->request->getData('state'),
                        'empty' => 'Select State'
                    ]
                ) ?>
            </div>
            <div class="col-lg-3 my-1">
                <?= $this->Form->select(
                    'category', 
                    $categories, 
                    [
                        'class' => 'form-control',
                        'default' => $this->request->getData('category'),
                        'empty' => 'Select Category'
                    ]
                ) ?>
            </div>
            <div class="col-lg-2 my-1">
                <?= $this->Form->button(
                    __('Search'), 
                    [
                        'class' => 'btn btn-block btn-secondary'
                    ]
                ) ?>
            </div>
        </div>
    <?= $this->Form->end() ?>
</div>