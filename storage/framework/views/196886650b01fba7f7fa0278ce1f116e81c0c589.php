<div>

<div class="page-content">
<div class="container-fluid">



            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">GENERAL INFORMATION</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item">GENERAL INFORMATION</li>
                                <li class="breadcrumb-item active">GENERAL INFORMATION</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
    <form action="" wire:submit.prevent="store">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-transparent border-bottom py-3">
                    <h4 class="card-title">Facilities</h4>
                    <p class="card-title-desc mb-0">Fill out the particulars in order to add or update.</p>
                </div>
                <div class="card-body">

              <div style="text-align:left;"><strong>A:</strong> <span><strong><u>GENERAL INFORMATION:</u></strong></span></div>
              <table class="table table-bordered mb-4">
                  <thead class="table-primary">
                      <tr>
                          <td>
                              <strong>S.NO.</strong>
                          </td>
                          <td>
                              <strong>INFORMATION</strong>
                          </td>
                          <td>
                              <strong>DETAILS</strong>
                          </td>
                      </tr>
                  </thead>
                  </tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          NAME OF THE SCHOOL
                      </td>
                      <td>
                          <input type="text" class="form-control"  wire:model="school_name" id="school_name" value="Comet Mensa Public School"/>
                          <?php $__errorArgs = ['school_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          2
                      </td>
                      <td>
                          AFFILIATION NO.(IF APPLICABLE)
                      </td>
                      <td>
                          <input type="text" class="form-control" id=""  wire:model="application_no" id="affn_no" value="630099"/>
                          <?php $__errorArgs = ['application_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          3
                      </td>
                      <td>
                          SCHOOL CODE (IF APPLICABLE)
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="school_code" id="school_code" value="43094"/>
                          <?php $__errorArgs = ['school_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          4
                      </td>
                      <td>
                          COMPLETE ADDRESS WITH PIN CODE
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="school_add" id="school_add" value="Comet Mensa Public School, Dehri, Tehsil Fatehpur, District Kangra, Himachal Pradesh - 176022"/>
                          <?php $__errorArgs = ['school_add'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          5
                      </td>
                      <td>
                          PRINCIPAL NAME & QUALIFICATION:
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="principal_detail" id="principal_det" value="Mrs. Jyoti Mahajan, M.Sc. (Botany), M. Phil.,  B.Ed.,  T.E.T., C.T.E.T."/>
                           <?php $__errorArgs = ['principal_detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          6
                      </td>
                      <td>
                          SCHOOL EMAIL ID
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="school_email" id="school_email" value="cmpschool2003@yahoo.com"/>
                          <?php $__errorArgs = ['school_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          7
                      </td>
                      <td>
                          CONTACT DETAILS (LANDLINE/MOBILE)
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="school_phone" id="school_phone" value="+91-9816025121, +91-9418292521"/>
                          <?php $__errorArgs = ['school_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </td>
                  </tr>
                  </tbody>
              </table>
              <div style="text-align:left;"><strong>B:</strong> <span><strong><u>DOCUMENTS AND INFORMATION:</u></strong></span></div>
              <table class="table table-bordered mb-4">
                  <thead class="table-primary">
                      <tr>
                          <td>
                              <strong>S.NO.</strong>
                          </td>
                          <td>
                              <strong>DOCUMENTS/INFORMATION</strong>
                          </td>
                          <td>
                              <strong>UPLOAD DOCUMENTS </strong>
                          </td>
                      </tr>
                  </thead>
                  </tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY
                      </td>
                      <td>
                          <input type="file" id="affn_doc" wire:model="doc1" />
                          <?php $__errorArgs = ['doc1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                       

                              
                      </td>
                  </tr>
                  <tr>
                      <td>
                          2
                      </td>
                      <td>
                          COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE
                      </td>
                      <td>
                          <input type="file" id="school_cert" wire:model="doc2" />
                          <?php $__errorArgs = ['doc2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                          
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          3
                      </td>
                      <td>
                          COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT
                      </td>
                      <td>
                          <input type="file" id="school_noc" wire:model="doc3" />
                           <?php $__errorArgs = ['doc3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                         
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          4
                      </td>
                      <td>
                          COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009, AND IT’S RENEWAL IF APPLICABLE
                      </td>
                      <td>
                          <input type="file" id="school_reco" wire:model="doc4" />
                           <?php $__errorArgs = ['doc4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                          
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          5
                      </td>
                      <td>
                          COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE
                      </td>
                      <td>
                          <input type="file" id="school_bdgsafety" wire:model="doc5" />
                           <?php $__errorArgs = ['doc5'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                         
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          6
                      </td>
                      <td>
                          COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY
                      </td>
                      <td>
                          <input type="file" id="school_firesafety" wire:model="doc6" />
                           <?php $__errorArgs = ['doc6'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                          
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          7
                      </td>
                      <td>
                          COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATIONOR SELF CERTIFICATION BY SCHOOL
                      </td>
                      <td>
                          <input type="file" id="school_deo" wire:model="doc7" />
                           <?php $__errorArgs = ['doc7'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          8
                      </td>
                      <td>
                          COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES
                      </td>
                      <td>
                          <input type="file" id="school_sanitise" wire:model="doc8" />
                           <?php $__errorArgs = ['doc8'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                         
                                                  </td>
                  </tr>
                  </tbody>
              </table>
              <div style="text-align:left; margin-bottom: 15px;"><strong>NOTE: </strong> <span>THE SCHOOLS NEEDS TO UPLOAD THE SELF ATTESTED COPIES OF ABOVE LISTED DOCUMETNS BY CHAIRMAN/MANAGER/SECRETARY AND PRINCIPAL. IN CASE, IT IS NOTICED AT LATER STAGE THAT UPLOADED DOCUMENTS ARE NOT GENUINE THEN SCHOOL SHALL BE LIABLE FOR ACTION AS PER NORMS.</span></div>
              <div style="text-align:left;"><strong>C:</strong> <span><strong><u>RESULT AND ACADEMICS:</u></strong></span></div>
              <table class="table table-bordered mb-4">
                  <thead class="table-primary">
                      <tr>
                          <td>
                              <strong>S.NO.</strong>
                          </td>
                          <td>
                              <strong>DOCUMENTS/INFORMATION</strong>
                          </td>
                          <td>
                              <strong>UPLOAD DOCUMENTS</strong>
                          </td>
                      </tr>
                  </thead>
                  </tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          FEE STRUCTURE OF THE SCHOOL
                      </td>
                      <td>
                          <input type="file" id="school_fee" wire:model="doc1_aca" />
                          <?php $__errorArgs = ['doc1_aca'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                          
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          2
                      </td>
                      <td>
                          ANNUAL ACADEMIC CALANDER.
                      </td>
                      <td>
                          <input type="file" id="school_calendar" wire:model="doc2_aca" />
                         <?php $__errorArgs = ['doc2_aca'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
                                                         
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          3
                      </td>
                      <td>
                          LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)
                      </td>
                      <td>
                          <input type="file" id="school_committe" wire:model="doc3_aca" />
                          <?php $__errorArgs = ['doc3_aca'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                          
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          4
                      </td>
                      <td>
                          LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS
                      </td>
                      <td>
                          <input type="file" id="school_pta" wire:model="doc4_aca" />
                          <?php $__errorArgs = ['doc4_aca'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                         
                                                  </td>
                  </tr>
                  <tr>
                      <td>
                          5
                      </td>
                      <td>
                          LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABLILITY
                      </td>
                      <td>
                          <input type="file" id="school_result" wire:model="doc5_aca" />
                          <?php $__errorArgs = ['doc5_aca'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                         
                                                  </td>
                  </tr>
                  </tbody>
              </table>
              <div style="text-align:left;"><strong>RESULT CLASS: X</strong></div>
              <table class="table table-bordered mb-4">
                  <thead class="table-primary">
                      <tr>
                          <td>
                              <strong>S.NO.</strong>
                          </td>
                          <td>
                              <strong>YEAR</strong>
                          </td>
                          <td>
                              <strong> NO. OF REGISTERED STUDENTS</strong>
                          </td>
                          <td>
                              <strong> NO. OF STUDENTS PASSED </strong>
                          </td>
                          <td>
                              <strong> PASS PERCENTAGE</strong>
                          </td>
                          <td>
                              <strong> REMARKS</strong>
                          </td>
                      </tr>
                  </thead>
                  </tbody>
                   <?php
                 $srno=1;
                ?>  
                <?php $__currentLoopData = $inputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $input): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                  <tr>
                      <td>
                          <?php echo e($srno); ?>

                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputs.<?php echo e($index); ?>.year" id="r1" value="2020"/>
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputs.<?php echo e($index); ?>.regstu" id="r2" value="42"/>
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputs.<?php echo e($index); ?>.passstu" id="r3" value="42"/>
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputs.<?php echo e($index); ?>.passper" id="r4" value="100"/>
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputs.<?php echo e($index); ?>.remarks" id="r5" value="Passed"/>
                         
                      </td>
                  </tr>
                	<?php $srno++ ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </tbody>
              </table>
              <div style="text-align:left;"><strong>RESULT CLASS: XII</strong></div>
              <table class="table table-bordered mb-4">
                  <thead class="table-primary">
                      <tr>
                          <td>
                              <strong>S.NO.</strong>
                          </td>
                          <td>
                              <strong>YEAR</strong>
                          </td>
                          <td>
                              <strong> NO. OF REGISTERED STUDENTS</strong>
                          </td>
                          <td>
                              <strong> NO. OF STUDENTS PASSED </strong>
                          </td>
                          <td>
                              <strong> PASS PERCENTAGE</strong>
                          </td>
                          <td>
                              <strong> REMARKS</strong>
                          </td>
                      </tr>
                  </thead>
                  </tbody>
                   <?php
                 $srrno=1;
                ?>  
                <?php $__currentLoopData = $inputother; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                  <tr>
                      <td>
                          <?php echo e($srrno); ?>

                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputother.<?php echo e($key); ?>.year" id="r11" value="2020"/>
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputother.<?php echo e($key); ?>.regstu" id="r22" value="42"/>
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputother.<?php echo e($key); ?>.passstu" id="r33" value="42"/>
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputother.<?php echo e($key); ?>.passper" id="r44" value="100"/>
                      </td>
                      <td>
                          <input type="text" class="form-control" wire:model="inputother.<?php echo e($key); ?>.remarks" id="r55" value="Passed"/>
                         
                      </td>
                  </tr>
                	<?php $srrno++ ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </tbody>
              </table>
              <div style="text-align:left;"><strong>D:</strong> <span><strong><u>STAFF (TEACHING)</u></strong></span></div>
              <table class="table table-bordered mb-4">
                  <thead class="table-primary">
                      <tr>
                          <td>
                              <strong>S.NO.</strong>
                          </td>
                          <td>
                              <strong>INFORMATION</strong>
                          </td>
                          <td>
                              <strong>DETAILS</strong>
                          </td>
                      </tr>
                  </thead>
                  </tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          PRINCIPAL
                      </td>
                      <td>
                          <input type="text" class="form-control" id="principal_name" wire:model="principal_name" value="Mrs. Jyoti Mahajan"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          2
                      </td>
                      <td>
                          TOTAL NO. OF TEACHERS
                      </td>
                      <td><input type="text" class="form-control" id="school_teachers" wire:model="school_teachers" value="21"/></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>PGT</td>
                      <td>
                          <input type="text" class="form-control" id="school_pgt" wire:model="school_pgt" value="04"/>
                      </td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>TGT</td>
                      <td>
                          <input type="text" class="form-control" id="school_tgt" wire:model="school_tgt" value="08"/>
                      </td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>PRT</td>
                      <td>
                          <input type="text" class="form-control" id="school_prt" wire:model="school_prt" value="07"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          3
                      </td>
                      <td>
                          TEACHERS SECTION RATIO
                      </td>
                      <td>
                          <input type="text" class="form-control" id="school_ratio" wire:model="school_ratio" value="3:1"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          4
                      </td>
                      <td>
                          DETAILS OF SPECIAL EDUCATOR
                      </td>
                      <td>
                          <input type="text" class="form-control" id="school_educator" wire:model="school_educator" value="0"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          5
                      </td>
                      <td>
                          DETAILS OF COUNSELLOR AND WELNESS TEACHER
                      </td>
                      <td>
                          <input type="text" class="form-control" id="school_cousellor" wire:model="school_cousellor" value="1"/>
                      </td>
                  </tr>
                  </tbody>
              </table>
              <div style="text-align:left;"><strong>E:</strong> <span><strong><u>SCHOOL INFRASTRUCTURE:</u></strong></span></div>
              <table class="table table-bordered mb-4">
                  <thead class="table-primary">
                      <tr>
                          <td>
                              <strong>S.NO.</strong>
                          </td>
                          <td>
                              <strong>INFORMATION</strong>
                          </td>
                          <td>
                              <strong>DETAILS</strong>
                          </td>
                      </tr>
                  </thead>
                  </tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td>
                          TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)
                      </td>
                      <td>
                          <input type="text" class="form-control" id="school_area" wire:model="school_area" value="8064 Sq.mts."/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          2
                      </td>
                      <td>
                          NO. AND SIZE OF THE CLASS ROOMS (IN SQ MTR)
                      </td>
                      <td>
                          <input type="text" class="form-control" id="school_rooms" wire:model="school_rooms" value="42 Classrooms with 43.48 Sq.mts. each"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          3
                      </td>
                      <td>
                          NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ MTR
                      </td>
                      <td>
                          <input type="text" class="form-control" id="school_labs" wire:model="school_labs" value="5"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          4
                      </td>
                      <td>
                          INTERNET FACILITY (Y/N)
                      </td>
                      <td>
                          <input type="text" class="form-control" id="school_internet" wire:model="school_internet" value="Y"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          5
                      </td>
                      <td>
                          NO. OF GIRLS TOILETS
                      </td>
                      <td>
                          <input type="text" class="form-control" id="toilet_girls" wire:model="toilet_girls" value="06"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          6
                      </td>
                      <td>
                          NO. OF BOYS TOILETS
                      </td>
                      <td>
                          <input type="text" class="form-control" id="toilet_boys" wire:model="toilet_boys" value="12"/>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          7
                      </td>
                      <td>
                          LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL
                      </td>
                      <td><input type="text" class="form-control" id="school_youtube" wire:model="school_youtube" value="https://www.youtube.com/watch?v=7-3XMujf5EA"/></td>
                  </tr>
                  </tbody>
              </table>


              <button type="submit" value="Submit" class="btn btn-success">   <span>Submit</span>
                                    </button>
                                   

                             

                </div>
            </div>
          </div>
        </div>
        <!--end row-->
    </form>
    

</div>
<!-- container-fluid -->
</div>
</div>
<?php /**PATH C:\xampp\htdocs\scindianew\resources\views/livewire/backend/mandatory/mandatory-public-disclosure.blade.php ENDPATH**/ ?>