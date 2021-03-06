<?php

/*
 * Copyright 2013 kelsocm.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Description of SimpleTemplate
 *
 * @author kelsocm
 */
class BaseTemplate implements ITemplate {

    private $fields;
    private $params;
    
    function __construct(FieldSet $fieldSet=null, $params=null) {
        $this->fields = $fieldSet;
        $this->params = $params;
    }
    
    public function getFields() {
        return $this->fields;
    }

    public function setFields(FieldSet $fieldSet) {
        $this->fields = $fieldSet;
    }

    public function getParams() {
        return $this->params;
    }

    public function setParams($params) {
        $this->params = $params;
    }
    
    public function fieldExists($fieldName) {
        return $this->fieldSet->fieldExists($fieldName);
    }

}
