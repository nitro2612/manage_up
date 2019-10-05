$(document).ready(function ()
{
    var areas = ['exc', 'dst_1', 'dst_2', 'ln', 'mn', 'fn', 'svc', 'oth'];
    var departments = [
            [
                '<option value="ofc">Office</option>',
                '<option value="ast">Assistance</option>',
                '<option value="qal_man">Quality management</option>',
                '<option value="dpc">Data protection commissioner</option>'
            ],
            [
                '<option value="dtb">Distribution</option>',
                '<option value="mkt">Marketing</option>'
            ],
            [
                '<option value="dtb">Distribution</option>',
                '<option value="mkt">Marketing</option>'
            ],
            [
                '<option value="tk_it">TK / IT</option>',
                '<option value="sfw">Software</option>'
            ],
            [
                '<option value="eng">Engineering 1</option>',
                '<option value="eng_2">Engineering 2</option>',
                '<option value="r_o_2">Roll out 2</option>',
                '<option value="r_o_3">Roll out 3</option>',
            ],
            [
                '<option value="eng">Engineering</option>',
                '<option value="r_o_1">Roll out 1</option>'
            ],
            [
                '<option value="scv_n_w">Services North-West</option>',
                '<option value="svc_e_m">Services East-Mid</option>',
                '<option value="svc_s">Services South</option>'
            ],
            [
                '<option value="ctrl">Controlling</option>',
                '<option value="pcm">Procurement</option>',
                '<option value="stk_lgt">Stock / Logistics</option>',
                '<option value="erp_prt">Europe / Partners</option>',
                '<option value="psn">Personnel</option>',
                '<option value="tch">Technique</option>'
            ]
        ];
    var jobs = [
            [
                '<option value="ceo">CEO</option>',
                '<option value="sec">Secretary</option>',
                '<option value="bsr">Bursar</option>'
            ],

            [
                '<option value="ccc_1">Clerk call center</option>',
                '<option value="emp_s_1">Employee sale</option>',
                '<option value="sls_m_1">Sales manager</option>',
                '<option value="am_dst_1">Area manager</option>'
            ],

            [
                '<option value="emp_s_2">Employee sale</option>',
                '<option value="sls_m_2">Sales manager</option>',
                '<option value="am_dst_2">Area manager</option>'
            ],
            [
                '<option value="sfd_wfe">Software developer (Web/Frontend)</option>',
                '<option value="sfd_wbe">Software developer (Web/Backend)</option>',
                '<option value="sfd_sys">Software developer (Systems)</option>',
                '<option value="sfe">Software Engineer</option>',
                '<option value="am_ln">Area manager</option>'
            ],

            [
                '<option value="cv_en_mn">Civil Engineers</option>',
                '<option value="mb_rd_ipt">Mobile radio inspector</option>',
                '<option value="emp_sv">Employee service</option>',
                '<option value="et_tcn">Electronics technician</option>',
                '<option value="mct">Mechatronics</option>',
                '<option value="am_mn">Area manager</option>'
            ],

            [
                '<option value="cv_en_fn">Civil Engineers</option>',
                '<option value="emp_bld_ctt">Employee building construction</option>',
                '<option value="it_sys_eng">IT systems engineer</option>',
                '<option value="am_fn">Area manager</option>'
            ],

            [
                '<option value="emp_cc">Employee Call center</option>',
                '<option value="emp_sup">Employee Support</option>',
                '<option value="emp_ast">Employee Assistance</option>',
                '<option value="am_svc">Area manager</option>'
            ],

            [
                '<option value="stf_mng">Staff manager</option>',
                '<option value="stf_mng_t">Staff manager Trainee</option>',
                '<option value="emp_stf">Employee staff</option>',
                '<option value="ctk">Caretaker</option>'
            ]
        ];

    // Switch Department select-field and job-select-field when area-select-field gets changed
    $('#area_select option').click(function ()
    {
        let current = this.getAttribute('value');

        $.each(['#department_select', '#job_select'], function (index, value) { $(value + ' option:not(.placeholder)').remove(); });
        $.each(areas, function (ind, val) { if(current === val) $.each(departments[ind], function (index, value) { $('#department_select').append(value); }); });
        $.each(areas, function (ind, val) { if(current === val) $.each(jobs[ind], function (index, value) { $('#job_select').append(value); }); });
    });
});