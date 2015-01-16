<?php
/**
 * The product module zh-cn file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2013 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     product
 * @version     $Id: zh-cn.php 5091 2013-07-10 06:06:46Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
$lang->product->common    = '产品线视图';
$lang->product->index     = "产品线首页";
$lang->product->browse    = "浏览产品线";
$lang->product->dynamic   = "动态";
$lang->product->view      = "产品线概况";
$lang->product->edit      = "编辑产品线";
$lang->product->batchEdit = "批量编辑";
$lang->product->create    = "新增产品线";
$lang->product->read      = "产品线详情";
$lang->product->delete    = "删除产品线";
$lang->product->deleted   = "已删除";
$lang->product->close     = "关闭";
$lang->product->select    = '--请选择产品线--';
$lang->product->mine      = '我负责：';
$lang->product->other     = '其他：';
$lang->product->closed    = '已关闭&raquo;';

$lang->product->basicInfo = '基本信息';
$lang->product->otherInfo = '其他信息';

$lang->product->plans    = '计划数';
$lang->product->releases = '发布数';
$lang->product->docs     = '文档数';
$lang->product->bugs     = '相关BUG';
$lang->product->projects = '关联项目数';
$lang->product->cases    = '用例数';
$lang->product->builds   = 'BUILD数';
$lang->product->roadmap  = '路线图';
$lang->product->doc      = '文档列表';
$lang->product->project  = '项目列表';

$lang->product->selectProduct   = "请选择产品线";
$lang->product->saveButton      = " 保存 (S) ";
$lang->product->confirmDelete   = " 您确定删除该产品线吗？";
$lang->product->ajaxGetProjects = "接口:项目列表";
$lang->product->ajaxGetPlans    = "接口:计划列表";

$lang->product->errorFormat    = '产品线数据格式不正确';
$lang->product->errorEmptyName = '产品线名称不能为空';
$lang->product->errorEmptyCode = '产品线代号不能为空';
$lang->product->errorNoProduct = '还没有创建产品线！';
$lang->product->accessDenied   = '您无权访问该产品线';

$lang->product->id        = '编号';
$lang->product->company   = '所属公司';
$lang->product->name      = '产品线名称';
$lang->product->code      = '产品线代号';
$lang->product->order     = '排序';
$lang->product->status    = '状态';
$lang->product->desc      = '产品线描述';
$lang->product->PO        = '产品线负责人';
$lang->product->QD        = '测试负责人';
$lang->product->RD        = '发布负责人';
$lang->product->acl       = '访问控制';
$lang->product->whitelist = '分组白名单';

$lang->product->moduleStory  = '按模块';
$lang->product->searchStory  = '搜索';
$lang->product->assignedToMe = '指派给我';
$lang->product->openedByMe   = '由我创建';
$lang->product->reviewedByMe = '由我评审';
$lang->product->closedByMe   = '由我关闭';
$lang->product->draftStory   = '草稿';
$lang->product->activeStory  = '激活';
$lang->product->changedStory = '已变更';
$lang->product->willClose    = '待关闭';
$lang->product->closedStory  = '已关闭';
$lang->product->unclosed     = '未关闭';

$lang->product->allStory    = '全部需求';
$lang->product->allProduct  = '全部产品线';
$lang->product->allProductsOfProject = '全部关联产品线';

$lang->product->statusList['']       = '';
$lang->product->statusList['normal'] = '正常';
$lang->product->statusList['closed'] = '结束';

$lang->product->aclList['open']    = '默认设置(有产品线视图权限，即可访问)';
$lang->product->aclList['private'] = '私有产品线(只有项目团队成员才能访问)';
$lang->product->aclList['custom']  = '自定义白名单(团队成员和白名单的成员可以访问)';

$lang->product->storySummary = "本页共 <strong>%s</strong> 个需求，预计周期 <strong>%s</strong> 个小时，用例覆盖率<strong>%s</strong>。";
$lang->product->noMatched    = '找不到包含"%s"的产品线';
