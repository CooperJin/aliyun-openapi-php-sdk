<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\live\Request\V20161101;

class CopyCasterSceneConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "CopyCasterSceneConfig");
		$this->setMethod("POST");
	}

	private  $fromSceneId;

	private  $securityToken;

	private  $casterId;

	private  $ownerId;

	private  $version;

	private  $toSceneId;

	public function getFromSceneId() {
		return $this->fromSceneId;
	}

	public function setFromSceneId($fromSceneId) {
		$this->fromSceneId = $fromSceneId;
		$this->queryParameters["FromSceneId"]=$fromSceneId;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getVersion() {
		return $this->version;
	}

	public function setVersion($version) {
		$this->version = $version;
		$this->queryParameters["Version"]=$version;
	}

	public function getToSceneId() {
		return $this->toSceneId;
	}

	public function setToSceneId($toSceneId) {
		$this->toSceneId = $toSceneId;
		$this->queryParameters["ToSceneId"]=$toSceneId;
	}
	
}