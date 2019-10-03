$(document).ready(function ()
{
    var areas = ['executive', 'distribution_1', 'distribution_2', 'local_networks', 'mobile_networks', 'fixed_networks', 'services', 'other'];
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
                '<option value="executive_1">Executive Job 1</option>',
                '<option value="executive_2">Executive Job 2</option>',
                '<option value="executive_3">Executive Job 3</option>'
            ],

            [
                '<option value="dist_1_1">Distribution1 Job 1</option>',
                '<option value="dist_1_2">Distribution1 Job 2</option>',
                '<option value="dist_1_3">Distribution1 Job 3</option>'
            ],

            [
                '<option value="dist_2_1">Distribution2 Job 1</option>',
                '<option value="dist_2_2">Distribution2 Job 2</option>',
                '<option value="dist_2_3">Distribution2 Job 3</option>'
            ],
            [
                '<option value="local_networks_1">Local Networks Job 1</option>',
                '<option value="local_networks_2">Local Networks Job 2</option>',
                '<option value="local_networks_3">Local Networks Job 3</option>'
            ],

            [
                '<option value="mobile_networks_1">Mobile Networks Job 1</option>',
                '<option value="mobile_networks_2">Mobile Networks Job 2</option>',
                '<option value="mobile_networks_3">Mobile Networks Job 3</option>'
            ],

            [
                '<option value="fixed_networks_1">Fixed Networks Job 1</option>',
                '<option value="fixed_networks_2">Fixed Networks Job 2</option>',
                '<option value="fixed_networks_3">Fixed Networks Job 3</option>'
            ],

            [
                '<option value="Services_1">Services Job 1</option>',
                '<option value="Services_2">Services Job 2</option>',
                '<option value="Services_3">Services Job 3</option>'
            ],

            [
                '<option value="other_1">Other Job 1</option>',
                '<option value="other_1">Other Job 2</option>',
                '<option value="other_1">Other Job 3</option>'
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