<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content row">

        <div class="row" style="padding: 10px;">
            <div class="col-md-6">
                <span type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Thêm mới nhóm hội đồng</span>
            </div>
        </div>

        <div class="container col-md-12">
            <div>
                <span><?php echo $this->session->flashdata('message'); ?></span>
            </div>
            <?php if ($teams): ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px;">
                        <table class="table table-striped table-bordered table-condensed admin">
                            <tr>
                                <td style="width: 3%"><b><a href="#">STT</a></b></td>
                                <td><b><a href="#">Tên nhóm</a></b></td>
                                <td><b><a href="#">Trưởng nhóm</a></b></td>
                                <td><b><a href="#">Thành viên</a></b></td>
                                <td><b>Thao tác</b></td>
                            </tr>

                            <?php foreach ($teams as $key => $team): ?>

                                <tr class="row_<?php echo $team['id']; ?>">
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $team['name']; ?></td>
                                    <td>
                                        <?php
                                            foreach($leaders as $key => $leader){
                                                if($team['leader_id'] == $leader['user_id']){
                                                    echo $leader['username'] . ' (' . $leader['email'] . ')';
                                                }
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <ul>
                                        <?php
                                        $array_member_id = explode(',', $team['member_id']);
                                        foreach($members as $key => $member){
                                            if(in_array($member['user_id'], $array_member_id)){
                                                echo '<li>' . $member['username'] . ' (' . $member['email'] . ')' . '  ' . '<a href="javascript:void(0);" onclick="removeMember(' . $team['id'] . ',' . $member['user_id'] . ');"><i style="color:red;" class="fa fa-remove" aria-hidden="true"></i></a>';
                                            }
                                        }
                                        ?>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="col-md-6">
<!--                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#addLeader" id="btnAddLeader">-->
<!--                                                <i class="fa fa-star" aria-hidden="true"></i>-->
<!--                                            </a>-->
                                            <a href="javascript:void(0);" data-team="<?php echo $team['id']; ?>" onclick="openAddLeaderModal(this);" id="btnAddLeader">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <a href="javascript:void(0);" data-team="<?php echo $team['id']; ?>" onclick="openAddMemberModal(this);" id="btnAddMember">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10px;">
                        <table class="table table-hover table-bordered table-condensed">
                            <tr>Không có kết quả phù hợp</tr>
                        </table>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tên nhóm</h4>
            </div>
            <div class="modal-body" id="modal-form">
                <input type="text" name="team-name" id="teamName" class="form-control"/>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary" id="createTeam">Đồng ý</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<div id="addLeader" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Chọn trưởng nhóm</h4>
            </div>
            <div class="modal-body" id="modal-form">
                <input type="hidden" value="" id="hiddenTeamId"/>
                <select id="selectLeader" class="form-control">
                    <option value="">-- Chọn trưởng nhóm --</option>
                    <?php if($leaders){ ?>
                        <?php foreach($leaders as $key => $leader){ ?>
                            <option value="<?php echo $leader['user_id'] ?>"><?php echo $leader['username'] . ' (' . $leader['email'] . ')'; ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary" id="confirmAddLeader">Đồng ý</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<div id="addMember" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Chọn thành viên</h4>
            </div>
            <div class="modal-body" id="modal-form">
                <input type="hidden" value="" id="hiddenTeamId"/>
                <select id="selectMember" class="form-control">
                    <option value="">-- Chọn thành viên --</option>
                    <?php if($members){ ?>
                        <?php foreach($members as $key => $member){ ?>
                            <option value="<?php echo $member['user_id'] ?>"><?php echo $member['username'] . ' (' . $member['email'] . ')'; ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary" id="confirmAddMember">Đồng ý</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#createTeam').click(function(){
       if($('#teamName').val() == ''){
           alert('Cần nhập tên nhóm hội đồng');
       }else{
           $.ajax({
               method: "GET",
               url: "<?php echo base_url('admin/team/create/'); ?>",
               data: {
                   name: $('#teamName').val()
               },
               success: function(result){
                   let data = JSON.parse(result);
                    if(data.name != undefined){
                        alert('Tạo nhóm ' + data.name + ' thành công')
                        window.location.reload();
                    }else{
                        alert(data.message)
                        window.location.reload();
                    }
               }
           });
       }
    });

    function openAddLeaderModal(event){
        $('#hiddenTeamId').val($(event).data("team"));
        $('#addLeader').modal('show');
    }

    $('#confirmAddLeader').click(function(){
        if($('#selectLeader').val() == ''){
            alert('Cần chọn trưởng nhóm');
        }else{
            $.ajax({
                method: "GET",
                url: "<?php echo base_url('admin/team/add_team_leader'); ?>",
                data: {
                    team_id: $('#hiddenTeamId').val(),
                    leader_id: $('#selectLeader').val()
                },
                success: function(result){
                    let data = JSON.parse(result);
                    if(data.name != undefined){
                        alert('Chọn trưởng nhóm ' + data.name + ' thành công')
                        window.location.reload();
                    }else{
                        alert(data.message)
                        window.location.reload();
                    }
                }
            });
        }
    });

    function openAddMemberModal(event){
        $('#hiddenTeamId').val($(event).data("team"));
        $('#addMember').modal('show');
    }

    $('#confirmAddMember').click(function(){
        if($('#selectMember').val() == ''){
            alert('Cần chọn thành viên');
        }else{
            $.ajax({
                method: "GET",
                url: "<?php echo base_url('admin/team/add_team_member'); ?>",
                data: {
                    team_id: $('#hiddenTeamId').val(),
                    member_id: $('#selectMember').val()
                },
                success: function(result){
                    let data = JSON.parse(result);
                    if(data.name != undefined){
                        alert('Chọn thành viên cho nhóm' + data.name + ' thành công')
                        window.location.reload();
                    }else{
                        alert(data.message)
                        window.location.reload();
                    }
                }
            });
        }
    });

    function removeMember(teamId, memberId){
        if(confirm('Chắc chắn xoá?')){
            $.ajax({
                method: "GET",
                url: "<?php echo base_url('admin/team/remove_team_member'); ?>",
                data: {
                    team_id: teamId,
                    member_id: memberId
                },
                success: function(result){
                    let data = JSON.parse(result);
                    if(data.name != undefined){
                        alert('Xoá thành viên cho nhóm' + data.name + ' thành công')
                        window.location.reload();
                    }else{
                        alert(data.message)
                        window.location.reload();
                    }
                }
            });
        }
    }

</script>