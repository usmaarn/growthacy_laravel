import{W as g,j as e}from"./app-BBgNcKgh.js";import{C as j,a as f,c as C,b,d as y}from"./card-BgFZ2hVY.js";import{S as s}from"./popover-CfrRK2LU.js";import{I as m}from"./input-V_4Ddml2.js";import{B as v}from"./button-TW6elmWW.js";import{S as p}from"./select-Bh24QFEx.js";import"./button-B_4rG_tW.js";import{G as S}from"./GuestLayout-DmW6j4T8.js";import"./createLucideIcon--cbDGzwO.js";import"./chevron-right-CrltLyFy.js";import"./index-BdQq_4o_.js";import"./index-Y0xEZQj7.js";import"./input-D39VjX7F.js";import"./ApplicationLogo-DVJ-aQSP.js";function H({company:t,ambassador:r,categories:u}){const{data:i,setData:l,post:c,processing:N,errors:n}=g({name:"",email:"",phone:"",type:"",category_id:"",company_id:t==null?void 0:t.id,user_id:r==null?void 0:r.id});function d(a){a.preventDefault(),c(route("company.onboard.store",t.username))}function o(a){const{name:h,value:x}=a.target;l(h,x)}return e.jsx(S,{name:t.name,children:e.jsx("section",{className:"w-full max-w-[400px] mx-auto",children:e.jsx("form",{onSubmit:d,children:e.jsxs(j,{children:[e.jsx(f,{children:e.jsx(C,{children:"Get Onboarded"})}),e.jsx(b,{className:"grid gap-5",children:e.jsxs("div",{className:"py-5 space-y-3",children:[e.jsx(m,{error:n==null?void 0:n.name,label:"Name",value:i==null?void 0:i.name,name:"name",onChange:o}),e.jsx(m,{error:n==null?void 0:n.email,label:"Email Address",name:"email",type:"email",value:i==null?void 0:i.email,onChange:o}),e.jsx(m,{error:n==null?void 0:n.phone,label:"Phone Number",name:"phone",type:"tel",value:i==null?void 0:i.phone,onChange:o}),e.jsx(p,{label:"Subscriber Type",value:i==null?void 0:i.type,error:n==null?void 0:n.type,onValueChange:a=>l("type",a),children:e.jsx(s,{value:"organization",children:"Organization"})}),i.type=="organization"&&e.jsx(p,{label:"Subscriber Category",error:n==null?void 0:n.category_id,value:i==null?void 0:i.category_id,onValueChange:a=>l("category_id",a),children:u.map(a=>e.jsx(s,{value:a.id.toString(),children:a.name},a.id))})]})}),e.jsx(y,{className:"space-x-5",children:e.jsx(v,{type:"submit",size:"default",className:"w-auto",children:"Register"})})]})})})})}export{H as default};
