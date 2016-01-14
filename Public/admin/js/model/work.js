var base_url = '/admin/api/work/'

var api={
  list: base_url+'works?page=',
  new: base_url+'',
  show: base_url+'show?wid=',
  delete: base_url+'destroy?wid=',
  get_cover: base_url+'getCover?wid=',
  get_name_bool: base_url+'getTeacherByName?name=',
  pagination: '/admin/api/pagination?page=1&model_name=Work'
}

var theApp = 'workApp';
var theController = 'workCtrl';
