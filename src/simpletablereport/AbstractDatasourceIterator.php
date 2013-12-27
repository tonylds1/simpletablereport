<?php

/*
 * Copyright 2013 kelsoncm.
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

namespace simre;

/**
 * Description of AbstractDatasourceIterator
 * 
 * @author kelsoncm
 */
abstract class AbstractDatasourceIterator implements \simre\IDatasourceIterator {
    
    private $fieldSet;
    
    function __construct(FieldSet $fieldSet) {
        $this->fieldSet = $fieldSet;
    }
    
    public function getFieldSet() {
        return $this->fieldSet;
    }

}