<?php

class Permission_action_edit_5f06d68b72ccca85e855abfad84c2372758536fa extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Permission';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ':
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['htmlEscape'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Edit';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '
	</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output5 = '';

$output5 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '

		<div class="form-group">
			<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['name'] = NULL;
$arguments11['value'] = NULL;
$arguments11['property'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['size'] = NULL;
$arguments11['disabled'] = NULL;
$arguments11['options'] = NULL;
$arguments11['optionsAfterContent'] = false;
$arguments11['optionValueField'] = NULL;
$arguments11['optionLabelField'] = NULL;
$arguments11['sortByOptionLabel'] = false;
$arguments11['selectAllByDefault'] = false;
$arguments11['errorClass'] = 'f3-form-error';
$arguments11['prependOptionLabel'] = NULL;
$arguments11['prependOptionValue'] = NULL;
$arguments11['multiple'] = false;
$output13 = '';

$output13 .= 'data[pages][';
$array14 = array (
);
$output13 .= $renderingContext->getVariableProvider()->getByPath('id', $array14);

$output13 .= '][perms_userid]';
$arguments11['name'] = $output13;
$array15 = array (
);$arguments11['options'] = $renderingContext->getVariableProvider()->getByPath('beUserData', $array15);
$array16 = array (
);$arguments11['value'] = $renderingContext->getVariableProvider()->getByPath('currentBeUser', $array16);
$arguments11['class'] = 'form-control';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output8 .= '
		</div>

		<div class="form-group">
			<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output8 .= '</label>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['name'] = NULL;
$arguments40['value'] = NULL;
$arguments40['property'] = NULL;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['size'] = NULL;
$arguments40['disabled'] = NULL;
$arguments40['options'] = NULL;
$arguments40['optionsAfterContent'] = false;
$arguments40['optionValueField'] = NULL;
$arguments40['optionLabelField'] = NULL;
$arguments40['sortByOptionLabel'] = false;
$arguments40['selectAllByDefault'] = false;
$arguments40['errorClass'] = 'f3-form-error';
$arguments40['prependOptionLabel'] = NULL;
$arguments40['prependOptionValue'] = NULL;
$arguments40['multiple'] = false;
$output42 = '';

$output42 .= 'data[pages][';
$array43 = array (
);
$output42 .= $renderingContext->getVariableProvider()->getByPath('id', $array43);

$output42 .= '][perms_groupid]';
$arguments40['name'] = $output42;
$array44 = array (
);$arguments40['options'] = $renderingContext->getVariableProvider()->getByPath('beGroupData', $array44);
$array45 = array (
);$arguments40['value'] = $renderingContext->getVariableProvider()->getByPath('currentBeGroup', $array45);
$arguments40['class'] = 'form-control';

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
				';
return $output39;
};
$arguments37 = array();

$output36 .= '';

$output36 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
					<div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output48 .= '</div>
				';
return $output48;
};
$arguments46 = array();
$arguments46['if'] = NULL;

$output36 .= '';

$output36 .= '
			';
return $output36;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['subject'] = NULL;
$array34 = array (
);$arguments32['subject'] = $renderingContext->getVariableProvider()->getByPath('beGroupData', $array34);
$renderChildrenClosure33 = ($arguments32['subject'] !== null) ? function() use ($arguments32) { return $arguments32['subject']; } : $renderChildrenClosure33;$array31['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
$array31['1'] = ' > 1';

$expression35 = function($context) {return (($context["node0"]) > 1);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['size'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['options'] = NULL;
$arguments22['optionsAfterContent'] = false;
$arguments22['optionValueField'] = NULL;
$arguments22['optionLabelField'] = NULL;
$arguments22['sortByOptionLabel'] = false;
$arguments22['selectAllByDefault'] = false;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['prependOptionLabel'] = NULL;
$arguments22['prependOptionValue'] = NULL;
$arguments22['multiple'] = false;
$output24 = '';

$output24 .= 'data[pages][';
$array25 = array (
);
$output24 .= $renderingContext->getVariableProvider()->getByPath('id', $array25);

$output24 .= '][perms_groupid]';
$arguments22['name'] = $output24;
$array26 = array (
);$arguments22['options'] = $renderingContext->getVariableProvider()->getByPath('beGroupData', $array26);
$array27 = array (
);$arguments22['value'] = $renderingContext->getVariableProvider()->getByPath('currentBeGroup', $array27);
$arguments22['class'] = 'form-control';

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
				';
return $output21;
};
$arguments19['__elseClosures'][] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
					<div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['htmlEscape'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '</div>
				';
return $output28;
};

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output8 .= '
		</div>

		<div class="panel panel-default panel-space">
			<div class="table-fit">
				<table class="table table-striped table-hover" id="typo3-permissionMatrix">
					<thead>
						<tr>
							<th></th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output8 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['key'] = NULL;
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output8 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['key'] = NULL;
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$arguments55['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output8 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['htmlEscape'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output8 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['key'] = NULL;
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['htmlEscape'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$arguments59['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output8 .= '</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['key'] = NULL;
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['htmlEscape'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$arguments61['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output8 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_user][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array63 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array63)]);

$output8 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array64 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array64)]);

$output8 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array65 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array65)]);

$output8 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array66 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array66)]);

$output8 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array67 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array67)]);

$output8 .= '][perms_user]\')" /></td>
						</tr>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output8 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_group][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array70 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array70)]);

$output8 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array71 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array71)]);

$output8 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array72 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array72)]);

$output8 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array73 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array73)]);

$output8 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array74 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array74)]);

$output8 .= '][perms_group]\')" /></td>
						</tr>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['htmlEscape'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output8 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_everybody][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array77 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array77)]);

$output8 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array78 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array78)]);

$output8 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array79 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array79)]);

$output8 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array80 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array80)]);

$output8 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array81 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array81)]);

$output8 .= '][perms_everybody]\')" /></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="form-group">
			<label for="recursionLevel">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output8 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['name'] = NULL;
$arguments84['value'] = NULL;
$arguments84['property'] = NULL;
$arguments84['class'] = NULL;
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$arguments84['size'] = NULL;
$arguments84['disabled'] = NULL;
$arguments84['options'] = NULL;
$arguments84['optionsAfterContent'] = false;
$arguments84['optionValueField'] = NULL;
$arguments84['optionLabelField'] = NULL;
$arguments84['sortByOptionLabel'] = false;
$arguments84['selectAllByDefault'] = false;
$arguments84['errorClass'] = 'f3-form-error';
$arguments84['prependOptionLabel'] = NULL;
$arguments84['prependOptionValue'] = NULL;
$arguments84['multiple'] = false;
$arguments84['id'] = 'recursionLevel';
$output86 = '';

$output86 .= 'mirror[pages][';
$array87 = array (
);
$output86 .= $renderingContext->getVariableProvider()->getByPath('id', $array87);

$output86 .= ']';
$arguments84['name'] = $output86;
$array88 = array (
);$arguments84['options'] = $renderingContext->getVariableProvider()->getByPath('recursiveSelectOptions', $array88);
$arguments84['class'] = 'form-control';

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output8 .= '
		</div>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['name'] = NULL;
$arguments89['value'] = NULL;
$arguments89['property'] = NULL;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$output91 = '';

$output91 .= 'data[pages][';
$array92 = array (
);
$output91 .= $renderingContext->getVariableProvider()->getByPath('id', $array92);

$output91 .= '][perms_user]';
$arguments89['name'] = $output91;
$array93 = array (
);$arguments89['value'] = $renderingContext->getVariableProvider()->getByPath('pageInfo.perms_user', $array93);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output8 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['additionalAttributes'] = NULL;
$arguments94['data'] = NULL;
$arguments94['name'] = NULL;
$arguments94['value'] = NULL;
$arguments94['property'] = NULL;
$arguments94['class'] = NULL;
$arguments94['dir'] = NULL;
$arguments94['id'] = NULL;
$arguments94['lang'] = NULL;
$arguments94['style'] = NULL;
$arguments94['title'] = NULL;
$arguments94['accesskey'] = NULL;
$arguments94['tabindex'] = NULL;
$arguments94['onclick'] = NULL;
$output96 = '';

$output96 .= 'data[pages][';
$array97 = array (
);
$output96 .= $renderingContext->getVariableProvider()->getByPath('id', $array97);

$output96 .= '][perms_group]';
$arguments94['name'] = $output96;
$array98 = array (
);$arguments94['value'] = $renderingContext->getVariableProvider()->getByPath('pageInfo.perms_group', $array98);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output8 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['name'] = NULL;
$arguments99['value'] = NULL;
$arguments99['property'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$output101 = '';

$output101 .= 'data[pages][';
$array102 = array (
);
$output101 .= $renderingContext->getVariableProvider()->getByPath('id', $array102);

$output101 .= '][perms_everybody]';
$arguments99['name'] = $output101;
$array103 = array (
);$arguments99['value'] = $renderingContext->getVariableProvider()->getByPath('pageInfo.perms_everybody', $array103);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output8 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['name'] = NULL;
$arguments104['value'] = NULL;
$arguments104['property'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['name'] = 'depth';
$array106 = array (
);$arguments104['value'] = $renderingContext->getVariableProvider()->getByPath('depth', $array106);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output8 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['name'] = NULL;
$arguments107['value'] = NULL;
$arguments107['property'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = 'returnUrl';
$array109 = array (
);$arguments107['value'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array109);

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output8 .= '

	';
return $output8;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['action'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['controller'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['pluginName'] = NULL;
$arguments6['pageUid'] = NULL;
$arguments6['object'] = NULL;
$arguments6['pageType'] = 0;
$arguments6['noCache'] = false;
$arguments6['noCacheHash'] = false;
$arguments6['section'] = '';
$arguments6['format'] = '';
$arguments6['additionalParams'] = array (
);
$arguments6['absolute'] = false;
$arguments6['addQueryString'] = false;
$arguments6['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments6['addQueryStringMethod'] = 'GET';
$arguments6['fieldNamePrefix'] = NULL;
$arguments6['actionUri'] = NULL;
$arguments6['objectName'] = NULL;
$arguments6['hiddenFieldClassName'] = NULL;
$arguments6['enctype'] = NULL;
$arguments6['method'] = NULL;
$arguments6['name'] = NULL;
$arguments6['onreset'] = NULL;
$arguments6['onsubmit'] = NULL;
$arguments6['target'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['action'] = 'update';
$arguments6['name'] = 'editform';
$arguments6['id'] = 'PermissionControllerEdit';

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '

	<hr>
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['htmlEscape'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output5 .= '</h3>
	<p>
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['htmlEscape'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output5 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['htmlEscape'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['key'] = NULL;
$arguments118['id'] = NULL;
$arguments118['default'] = NULL;
$arguments118['htmlEscape'] = NULL;
$arguments118['arguments'] = NULL;
$arguments118['extensionName'] = NULL;
$arguments118['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output5 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['key'] = NULL;
$arguments120['id'] = NULL;
$arguments120['default'] = NULL;
$arguments120['htmlEscape'] = NULL;
$arguments120['arguments'] = NULL;
$arguments120['extensionName'] = NULL;
$arguments120['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['key'] = NULL;
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['htmlEscape'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output5 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['key'] = NULL;
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['htmlEscape'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$arguments124['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext)]);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['htmlEscape'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output5 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['htmlEscape'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output5 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['key'] = NULL;
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['htmlEscape'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext)]);

$output5 .= '
	</p>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['key'] = NULL;
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['htmlEscape'] = NULL;
$arguments132['arguments'] = NULL;
$arguments132['extensionName'] = NULL;
$arguments132['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext)]);

$output5 .= '</p>

	<script type="text/javascript">
		require(["jquery", "TYPO3/CMS/Beuser/Permissions"], function($, Permissions) {
			Permissions.setCheck("check[perms_user]", "tx_beuser_system_beusertxpermission[data][pages][';
$array134 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array134)]);

$output5 .= '][perms_user]");
			Permissions.setCheck("check[perms_group]", "tx_beuser_system_beusertxpermission[data][pages][';
$array135 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array135)]);

$output5 .= '][perms_group]");
			Permissions.setCheck("check[perms_everybody]", "tx_beuser_system_beusertxpermission[data][pages][';
$array136 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array136)]);

$output5 .= '][perms_everybody]");
		});
	</script>

';

return $output5;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output137 = '';

$output137 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['name'] = NULL;
$arguments138['name'] = 'Permission';

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output137 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['key'] = NULL;
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['htmlEscape'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$arguments143['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions';

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output142 .= ':
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['key'] = NULL;
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['htmlEscape'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$arguments145['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Edit';

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output142 .= '
	</h1>
';
return $output142;
};
$arguments140 = array();
$arguments140['name'] = NULL;
$arguments140['name'] = 'headline';

$output137 .= NULL;

$output137 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '

		<div class="form-group">
			<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['key'] = NULL;
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['htmlEscape'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$arguments153['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output152 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['name'] = NULL;
$arguments155['value'] = NULL;
$arguments155['property'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['size'] = NULL;
$arguments155['disabled'] = NULL;
$arguments155['options'] = NULL;
$arguments155['optionsAfterContent'] = false;
$arguments155['optionValueField'] = NULL;
$arguments155['optionLabelField'] = NULL;
$arguments155['sortByOptionLabel'] = false;
$arguments155['selectAllByDefault'] = false;
$arguments155['errorClass'] = 'f3-form-error';
$arguments155['prependOptionLabel'] = NULL;
$arguments155['prependOptionValue'] = NULL;
$arguments155['multiple'] = false;
$output157 = '';

$output157 .= 'data[pages][';
$array158 = array (
);
$output157 .= $renderingContext->getVariableProvider()->getByPath('id', $array158);

$output157 .= '][perms_userid]';
$arguments155['name'] = $output157;
$array159 = array (
);$arguments155['options'] = $renderingContext->getVariableProvider()->getByPath('beUserData', $array159);
$array160 = array (
);$arguments155['value'] = $renderingContext->getVariableProvider()->getByPath('currentBeUser', $array160);
$arguments155['class'] = 'form-control';

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output152 .= '
		</div>

		<div class="form-group">
			<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['htmlEscape'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output152 .= '</label>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['name'] = NULL;
$arguments184['value'] = NULL;
$arguments184['property'] = NULL;
$arguments184['class'] = NULL;
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$arguments184['size'] = NULL;
$arguments184['disabled'] = NULL;
$arguments184['options'] = NULL;
$arguments184['optionsAfterContent'] = false;
$arguments184['optionValueField'] = NULL;
$arguments184['optionLabelField'] = NULL;
$arguments184['sortByOptionLabel'] = false;
$arguments184['selectAllByDefault'] = false;
$arguments184['errorClass'] = 'f3-form-error';
$arguments184['prependOptionLabel'] = NULL;
$arguments184['prependOptionValue'] = NULL;
$arguments184['multiple'] = false;
$output186 = '';

$output186 .= 'data[pages][';
$array187 = array (
);
$output186 .= $renderingContext->getVariableProvider()->getByPath('id', $array187);

$output186 .= '][perms_groupid]';
$arguments184['name'] = $output186;
$array188 = array (
);$arguments184['options'] = $renderingContext->getVariableProvider()->getByPath('beGroupData', $array188);
$array189 = array (
);$arguments184['value'] = $renderingContext->getVariableProvider()->getByPath('currentBeGroup', $array189);
$arguments184['class'] = 'form-control';

$output183 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
				';
return $output183;
};
$arguments181 = array();

$output180 .= '';

$output180 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$output192 = '';

$output192 .= '
					<div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['htmlEscape'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output192 .= '</div>
				';
return $output192;
};
$arguments190 = array();
$arguments190['if'] = NULL;

$output180 .= '';

$output180 .= '
			';
return $output180;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['subject'] = NULL;
$array178 = array (
);$arguments176['subject'] = $renderingContext->getVariableProvider()->getByPath('beGroupData', $array178);
$renderChildrenClosure177 = ($arguments176['subject'] !== null) ? function() use ($arguments176) { return $arguments176['subject']; } : $renderChildrenClosure177;$array175['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
$array175['1'] = ' > 1';

$expression179 = function($context) {return (($context["node0"]) > 1);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments163['__thenClosure'] = function() use ($renderingContext, $self) {
$output165 = '';

$output165 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['additionalAttributes'] = NULL;
$arguments166['data'] = NULL;
$arguments166['name'] = NULL;
$arguments166['value'] = NULL;
$arguments166['property'] = NULL;
$arguments166['class'] = NULL;
$arguments166['dir'] = NULL;
$arguments166['id'] = NULL;
$arguments166['lang'] = NULL;
$arguments166['style'] = NULL;
$arguments166['title'] = NULL;
$arguments166['accesskey'] = NULL;
$arguments166['tabindex'] = NULL;
$arguments166['onclick'] = NULL;
$arguments166['size'] = NULL;
$arguments166['disabled'] = NULL;
$arguments166['options'] = NULL;
$arguments166['optionsAfterContent'] = false;
$arguments166['optionValueField'] = NULL;
$arguments166['optionLabelField'] = NULL;
$arguments166['sortByOptionLabel'] = false;
$arguments166['selectAllByDefault'] = false;
$arguments166['errorClass'] = 'f3-form-error';
$arguments166['prependOptionLabel'] = NULL;
$arguments166['prependOptionValue'] = NULL;
$arguments166['multiple'] = false;
$output168 = '';

$output168 .= 'data[pages][';
$array169 = array (
);
$output168 .= $renderingContext->getVariableProvider()->getByPath('id', $array169);

$output168 .= '][perms_groupid]';
$arguments166['name'] = $output168;
$array170 = array (
);$arguments166['options'] = $renderingContext->getVariableProvider()->getByPath('beGroupData', $array170);
$array171 = array (
);$arguments166['value'] = $renderingContext->getVariableProvider()->getByPath('currentBeGroup', $array171);
$arguments166['class'] = 'form-control';

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '
				';
return $output165;
};
$arguments163['__elseClosures'][] = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
					<div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['htmlEscape'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '</div>
				';
return $output172;
};

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output152 .= '
		</div>

		<div class="panel panel-default panel-space">
			<div class="table-fit">
				<table class="table table-striped table-hover" id="typo3-permissionMatrix">
					<thead>
						<tr>
							<th></th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['htmlEscape'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);

$output152 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['htmlEscape'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output152 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['key'] = NULL;
$arguments199['id'] = NULL;
$arguments199['default'] = NULL;
$arguments199['htmlEscape'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['extensionName'] = NULL;
$arguments199['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output152 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['htmlEscape'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output152 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['htmlEscape'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext)]);

$output152 .= '</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['key'] = NULL;
$arguments205['id'] = NULL;
$arguments205['default'] = NULL;
$arguments205['htmlEscape'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['extensionName'] = NULL;
$arguments205['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext)]);

$output152 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_user][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array207 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array207)]);

$output152 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array208 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array208)]);

$output152 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array209 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array209)]);

$output152 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array210 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array210)]);

$output152 .= '][perms_user]\')" /></td>
							<td><input type="checkbox" name="check[perms_user][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_user]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array211 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array211)]);

$output152 .= '][perms_user]\')" /></td>
						</tr>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['key'] = NULL;
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['htmlEscape'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);

$output152 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_group][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array214 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array214)]);

$output152 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array215 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array215)]);

$output152 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array216 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array216)]);

$output152 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array217 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array217)]);

$output152 .= '][perms_group]\')" /></td>
							<td><input type="checkbox" name="check[perms_group][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_group]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array218 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array218)]);

$output152 .= '][perms_group]\')" /></td>
						</tr>
						<tr>
							<td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['key'] = NULL;
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['htmlEscape'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output152 .= '</strong></td>
							<td><input type="checkbox" name="check[perms_everybody][1]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array221 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array221)]);

$output152 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][5]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array222 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array222)]);

$output152 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][2]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array223 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array223)]);

$output152 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][3]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array224 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array224)]);

$output152 .= '][perms_everybody]\')" /></td>
							<td><input type="checkbox" name="check[perms_everybody][4]" onclick="TYPO3.Permissions.checkChange(\'check[perms_everybody]\', \'tx_beuser_system_beusertxpermission[data][pages][';
$array225 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array225)]);

$output152 .= '][perms_everybody]\')" /></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="form-group">
			<label for="recursionLevel">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['key'] = NULL;
$arguments226['id'] = NULL;
$arguments226['default'] = NULL;
$arguments226['htmlEscape'] = NULL;
$arguments226['arguments'] = NULL;
$arguments226['extensionName'] = NULL;
$arguments226['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext)]);

$output152 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['additionalAttributes'] = NULL;
$arguments228['data'] = NULL;
$arguments228['name'] = NULL;
$arguments228['value'] = NULL;
$arguments228['property'] = NULL;
$arguments228['class'] = NULL;
$arguments228['dir'] = NULL;
$arguments228['id'] = NULL;
$arguments228['lang'] = NULL;
$arguments228['style'] = NULL;
$arguments228['title'] = NULL;
$arguments228['accesskey'] = NULL;
$arguments228['tabindex'] = NULL;
$arguments228['onclick'] = NULL;
$arguments228['size'] = NULL;
$arguments228['disabled'] = NULL;
$arguments228['options'] = NULL;
$arguments228['optionsAfterContent'] = false;
$arguments228['optionValueField'] = NULL;
$arguments228['optionLabelField'] = NULL;
$arguments228['sortByOptionLabel'] = false;
$arguments228['selectAllByDefault'] = false;
$arguments228['errorClass'] = 'f3-form-error';
$arguments228['prependOptionLabel'] = NULL;
$arguments228['prependOptionValue'] = NULL;
$arguments228['multiple'] = false;
$arguments228['id'] = 'recursionLevel';
$output230 = '';

$output230 .= 'mirror[pages][';
$array231 = array (
);
$output230 .= $renderingContext->getVariableProvider()->getByPath('id', $array231);

$output230 .= ']';
$arguments228['name'] = $output230;
$array232 = array (
);$arguments228['options'] = $renderingContext->getVariableProvider()->getByPath('recursiveSelectOptions', $array232);
$arguments228['class'] = 'form-control';

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output152 .= '
		</div>

		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['additionalAttributes'] = NULL;
$arguments233['data'] = NULL;
$arguments233['name'] = NULL;
$arguments233['value'] = NULL;
$arguments233['property'] = NULL;
$arguments233['class'] = NULL;
$arguments233['dir'] = NULL;
$arguments233['id'] = NULL;
$arguments233['lang'] = NULL;
$arguments233['style'] = NULL;
$arguments233['title'] = NULL;
$arguments233['accesskey'] = NULL;
$arguments233['tabindex'] = NULL;
$arguments233['onclick'] = NULL;
$output235 = '';

$output235 .= 'data[pages][';
$array236 = array (
);
$output235 .= $renderingContext->getVariableProvider()->getByPath('id', $array236);

$output235 .= '][perms_user]';
$arguments233['name'] = $output235;
$array237 = array (
);$arguments233['value'] = $renderingContext->getVariableProvider()->getByPath('pageInfo.perms_user', $array237);

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output152 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['additionalAttributes'] = NULL;
$arguments238['data'] = NULL;
$arguments238['name'] = NULL;
$arguments238['value'] = NULL;
$arguments238['property'] = NULL;
$arguments238['class'] = NULL;
$arguments238['dir'] = NULL;
$arguments238['id'] = NULL;
$arguments238['lang'] = NULL;
$arguments238['style'] = NULL;
$arguments238['title'] = NULL;
$arguments238['accesskey'] = NULL;
$arguments238['tabindex'] = NULL;
$arguments238['onclick'] = NULL;
$output240 = '';

$output240 .= 'data[pages][';
$array241 = array (
);
$output240 .= $renderingContext->getVariableProvider()->getByPath('id', $array241);

$output240 .= '][perms_group]';
$arguments238['name'] = $output240;
$array242 = array (
);$arguments238['value'] = $renderingContext->getVariableProvider()->getByPath('pageInfo.perms_group', $array242);

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output152 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['additionalAttributes'] = NULL;
$arguments243['data'] = NULL;
$arguments243['name'] = NULL;
$arguments243['value'] = NULL;
$arguments243['property'] = NULL;
$arguments243['class'] = NULL;
$arguments243['dir'] = NULL;
$arguments243['id'] = NULL;
$arguments243['lang'] = NULL;
$arguments243['style'] = NULL;
$arguments243['title'] = NULL;
$arguments243['accesskey'] = NULL;
$arguments243['tabindex'] = NULL;
$arguments243['onclick'] = NULL;
$output245 = '';

$output245 .= 'data[pages][';
$array246 = array (
);
$output245 .= $renderingContext->getVariableProvider()->getByPath('id', $array246);

$output245 .= '][perms_everybody]';
$arguments243['name'] = $output245;
$array247 = array (
);$arguments243['value'] = $renderingContext->getVariableProvider()->getByPath('pageInfo.perms_everybody', $array247);

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output152 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['additionalAttributes'] = NULL;
$arguments248['data'] = NULL;
$arguments248['name'] = NULL;
$arguments248['value'] = NULL;
$arguments248['property'] = NULL;
$arguments248['class'] = NULL;
$arguments248['dir'] = NULL;
$arguments248['id'] = NULL;
$arguments248['lang'] = NULL;
$arguments248['style'] = NULL;
$arguments248['title'] = NULL;
$arguments248['accesskey'] = NULL;
$arguments248['tabindex'] = NULL;
$arguments248['onclick'] = NULL;
$arguments248['name'] = 'depth';
$array250 = array (
);$arguments248['value'] = $renderingContext->getVariableProvider()->getByPath('depth', $array250);

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output152 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['additionalAttributes'] = NULL;
$arguments251['data'] = NULL;
$arguments251['name'] = NULL;
$arguments251['value'] = NULL;
$arguments251['property'] = NULL;
$arguments251['class'] = NULL;
$arguments251['dir'] = NULL;
$arguments251['id'] = NULL;
$arguments251['lang'] = NULL;
$arguments251['style'] = NULL;
$arguments251['title'] = NULL;
$arguments251['accesskey'] = NULL;
$arguments251['tabindex'] = NULL;
$arguments251['onclick'] = NULL;
$arguments251['name'] = 'returnUrl';
$array253 = array (
);$arguments251['value'] = $renderingContext->getVariableProvider()->getByPath('returnUrl', $array253);

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output152 .= '

	';
return $output152;
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['action'] = NULL;
$arguments150['arguments'] = array (
);
$arguments150['controller'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['pluginName'] = NULL;
$arguments150['pageUid'] = NULL;
$arguments150['object'] = NULL;
$arguments150['pageType'] = 0;
$arguments150['noCache'] = false;
$arguments150['noCacheHash'] = false;
$arguments150['section'] = '';
$arguments150['format'] = '';
$arguments150['additionalParams'] = array (
);
$arguments150['absolute'] = false;
$arguments150['addQueryString'] = false;
$arguments150['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments150['addQueryStringMethod'] = 'GET';
$arguments150['fieldNamePrefix'] = NULL;
$arguments150['actionUri'] = NULL;
$arguments150['objectName'] = NULL;
$arguments150['hiddenFieldClassName'] = NULL;
$arguments150['enctype'] = NULL;
$arguments150['method'] = NULL;
$arguments150['name'] = NULL;
$arguments150['onreset'] = NULL;
$arguments150['onsubmit'] = NULL;
$arguments150['target'] = NULL;
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['action'] = 'update';
$arguments150['name'] = 'editform';
$arguments150['id'] = 'PermissionControllerEdit';

$output149 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '

	<hr>
	<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['key'] = NULL;
$arguments254['id'] = NULL;
$arguments254['default'] = NULL;
$arguments254['htmlEscape'] = NULL;
$arguments254['arguments'] = NULL;
$arguments254['extensionName'] = NULL;
$arguments254['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext)]);

$output149 .= '</h3>
	<p>
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['htmlEscape'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output149 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['htmlEscape'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output149 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['key'] = NULL;
$arguments260['id'] = NULL;
$arguments260['default'] = NULL;
$arguments260['htmlEscape'] = NULL;
$arguments260['arguments'] = NULL;
$arguments260['extensionName'] = NULL;
$arguments260['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext)]);

$output149 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['key'] = NULL;
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['htmlEscape'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$arguments262['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext)]);

$output149 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['key'] = NULL;
$arguments264['id'] = NULL;
$arguments264['default'] = NULL;
$arguments264['htmlEscape'] = NULL;
$arguments264['arguments'] = NULL;
$arguments264['extensionName'] = NULL;
$arguments264['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext)]);

$output149 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['key'] = NULL;
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['htmlEscape'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$arguments266['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext)]);

$output149 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['key'] = NULL;
$arguments268['id'] = NULL;
$arguments268['default'] = NULL;
$arguments268['htmlEscape'] = NULL;
$arguments268['arguments'] = NULL;
$arguments268['extensionName'] = NULL;
$arguments268['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext)]);

$output149 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['htmlEscape'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output149 .= ' <br />
		<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['key'] = NULL;
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['htmlEscape'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext)]);

$output149 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['key'] = NULL;
$arguments274['id'] = NULL;
$arguments274['default'] = NULL;
$arguments274['htmlEscape'] = NULL;
$arguments274['arguments'] = NULL;
$arguments274['extensionName'] = NULL;
$arguments274['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext)]);

$output149 .= '
	</p>
	<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['key'] = NULL;
$arguments276['id'] = NULL;
$arguments276['default'] = NULL;
$arguments276['htmlEscape'] = NULL;
$arguments276['arguments'] = NULL;
$arguments276['extensionName'] = NULL;
$arguments276['key'] = 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def';

$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext)]);

$output149 .= '</p>

	<script type="text/javascript">
		require(["jquery", "TYPO3/CMS/Beuser/Permissions"], function($, Permissions) {
			Permissions.setCheck("check[perms_user]", "tx_beuser_system_beusertxpermission[data][pages][';
$array278 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array278)]);

$output149 .= '][perms_user]");
			Permissions.setCheck("check[perms_group]", "tx_beuser_system_beusertxpermission[data][pages][';
$array279 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array279)]);

$output149 .= '][perms_group]");
			Permissions.setCheck("check[perms_everybody]", "tx_beuser_system_beusertxpermission[data][pages][';
$array280 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array280)]);

$output149 .= '][perms_everybody]");
		});
	</script>

';
return $output149;
};
$arguments147 = array();
$arguments147['name'] = NULL;
$arguments147['name'] = 'content';

$output137 .= NULL;

$output137 .= '
';

return $output137;
}


}
#