<?php defined('IN_IA') or exit('Access Denied');?><input type="hidden" name="reply_id" value="<?php  echo $reply['id'];?>" />
<?php  load()->func('tpl')?>
   <div class="panel panel-default">
            <div class="panel-heading">
                添加摇一摇活动
            </div>
            <div class="panel-body">
            	<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
                    <div class="col-xs-12 col-sm-9">
                          <label for="radio_1" class="radio-inline"><input type="radio" name="shakestatus" id="radio_1" value="0" <?php  if(empty($rid)) { ?>disabled<?php  } ?> <?php  if($reply['status'] == 0 || empty($reply['status'])) { ?> checked<?php  } ?> /> 未开始</label>
                    <label for="radio_2" class="radio-inline"><input type="radio" name="shakestatus" id="radio_2" value="1" <?php  if(empty($rid)) { ?>disabled<?php  } ?> <?php  if($reply['status'] == 1) { ?> checked<?php  } ?> /> 进行中</label>
                    <label for="radio_3" class="radio-inline"><input type="radio" name="shakestatus" id="radio_3" value="2" <?php  if(empty($rid)) { ?>disabled<?php  } ?> <?php  if($reply['status'] == 2) { ?> checked<?php  } ?> /> 已结束</label>
                    </div>
                </div>				<div class="form-group">                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">查看大屏活动</label>                    <label for="radio_1" class="radio-inline">						<a href="<?php  echo $this->createWebUrl('detail', array('id' => $reply['rid']))?>" target="_blank">点击进入</a>                    </div>                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">结束摇动次数</label>
                    <div class="col-xs-12 col-sm-9">
                           <input type="text" value="<?php  echo $reply['maxshake'];?>" class="form-control" name="maxshake">
                           <div class="help-block">设置此值后，当有用户摇动值等于或是超过此值，则活动结束。</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">中奖用户数量</label>
                    <div class="col-xs-12 col-sm-9">
                          <input type="text" value="<?php  echo $reply['maxwinner'];?>" class="form-control" name="maxwinner">
                          <div class="help-block">设置此值后，大屏幕中只显示前N位的摇动数据。</div>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">最大摇奖用户数量</label>
                    <div class="col-xs-12 col-sm-9">
                          <input type="text" value="<?php  echo $reply['maxjoin'];?>" class="form-control" name="maxjoin">
                          <div class="help-block">设置此值后，参与摇奖的人数最多不会超过此项。</div>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">摇奖用户产生概率</label>
                    <div class="col-xs-12 col-sm-9">
                          <input type="text" value="<?php  echo $reply['joinprobability'];?>" class="form-control" name="joinprobability">
                          <div class="help-block" style="color:red;font-weight:700;font-size:14px">强烈建议阅读此项！设置用户能真正进入摇奖活动的概率。如果是测试时，请设置此值为100。</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">开始倒计时</label>
                    <div class="col-xs-12 col-sm-9">
                        <input type="text" value="<?php  echo $reply['countdown'];?>" class="form-control" name="countdown">
                    <div class="help-block">点击活动开始后的倒计时。单位秒</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">摇动幅度</label>
                    <div class="col-xs-12 col-sm-9">
                         <input type="text" value="<?php  echo $reply['speed'];?>" class="form-control" name="speed">
                    <div class="help-block">此值越大，用户需要摇动的范围越大才算有效摇动。</div>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">摇动幅度（android）</label>
                    <div class="col-xs-12 col-sm-9">
                         <input type="text" value="<?php  echo $reply['speedandroid'];?>" class="form-control" name="speedandroid">
                    <div class="help-block">由于Android，IOS等系统差异，此处可以单独设置Android的值。</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">摇动间隔时间</label>
                    <div class="col-xs-12 col-sm-9">
                        <input type="text" value="<?php  echo $reply['interval'];?>" class="form-control" name="interval">
                    <div class="help-block">单位毫秒，设置获取用户两次有效摇的时间间隔，此值越大则间隔时间越长。建议此值不要设置太小。</div>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码</label>
                    <div class="col-xs-12 col-sm-9">
                         <?php  echo tpl_form_field_image('qrcode', $reply['qrcode'])?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">封面</label>
                    <div class="col-xs-12 col-sm-9">
                         <?php  echo tpl_form_field_image('cover', $reply['cover'])?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义LOGO</label>
                    <div class="col-xs-12 col-sm-9">
						<?php  echo tpl_form_field_image('logo', $reply['logo']);?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">大屏左则图片</label>
                    <div class="col-xs-12 col-sm-9">
                     	<?php  echo tpl_form_field_image('background', $reply['background'])?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">活动简介</label>
                    <div class="col-xs-12 col-sm-9">
                         <textarea style="height:200px;" class="form-control" id="description" name="description" cols="70"><?php  echo $reply['description'];?></textarea>
                         <div class="help-block">用于图文显示的简介</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">活动规则</label>
                    <div class="col-xs-12 col-sm-9">
                          <textarea id="rule" style="height:150px;" name="rule" class="span7" cols="60"><?php  echo $reply['rule'];?></textarea>
                    <div class="help-block">活动的相关说明和活动奖品介绍。</div>
                    </div>
                </div>
            </div>
   </div>
<script type="text/javascript">
    require(['util'],function(util){
        util.editor($('#rule')[0]);
    })
</script>
